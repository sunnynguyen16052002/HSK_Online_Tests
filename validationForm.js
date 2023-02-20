
function Validator(options) {

    function getParent(element, selector) {
        while (element.parentElement) {
            if(element.parentElement.matches(selector)) {
                return element.parentElement;
            }

            element = element.parentElement;
        }
    }

    var selectorRules = {};

    function validate (inputElement, rule) {
        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        var errorMessage ;
             // console.log(errorMessage)
        

        //Lấy ra các rules của selector
        var rules = selectorRules[rule.selector];


        //Lặp qua từng rules và kiểm tra
        for (var i = 0; i< rules.length; i++) {
            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value)
            }
            if(errorMessage) {
                //Nếu có lỗi thì dừng việc kiểm tra
                break;
            }
        }
                    
        if(errorMessage) {
            errorElement.innerText = errorMessage;
            getParent(inputElement, options.formGroupSelector).classList.add('invalid');
        } else {
            errorElement.innerText = '';
            getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
        }

        return !errorMessage;
    }

    // console.log(options.form);
    var formElement = document.querySelector(options.form);
    // console.log(options.rules);

    if(formElement) {
        // console.log(formElement)


        formElement.onsubmit = function (e) {
            e.preventDefault();

            //đặt cờ, true khi khong có lỗi
            var isFormValid = true;
            
            //lặp qua từng rule và validate hết các trường --> chặn người dùng không nhập gì đã nhấn nộp
            options.rules.forEach(function (rule){
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);

                if(!isValid) {
                    isFormValid = false;
                }
            });

            if(isFormValid) {
                // console.log('Không có lỗi');


                //trường hợp submit với javascript
                if(typeof options.onSubmit === 'function') {

                    var enableInputs = formElement.querySelector('[name]');
                    var formValues = Array.from(enableInputs).reduce(function (values, input) {
                        
                        switch(input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name = "' + input.name + '"]:checked').values;
                                break;
                            case 'checkbox':
                                if(input.matches(':checked')) return values;

                                if(Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }

                                values[input.name].push(input.values);

                                break;
                            case 'file':
                                values[input.name] = input.file;
                            default:
                                values[input.name] = input.value;
                        }
                        return (values);
                    }, {});

                    options.onSubmit (formValues);
                }
                else {
                // console.log('có lỗi');
                formElement.submit();
            }

            } 
            
            //trường hợp submit với hành vi mặc định (nhập hết dữ liệu, tắt onsubmit bên index)
            
        }




        //lặp qua mỗi rule và xử lí (lắng nghe sự liện với hành dộng ng dùng)
        options.rules.forEach(function (rule){
            //Lưu lại các rules trong mỗi input

            if(Array.isArray(selectorRules[rule.selector])) {

                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test] ;
            }

            // selectorRules[rule.selector] = rule.test;

            var inputElements = formElement.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach(function (inputElement) {
                inputElement.onblur = function () {
                    // console.log(inputElement.value);
                    
                    validate(inputElement, rule);

                }


                // xử lý mỗi khi người dùng nhập phải chuyển sang xanh
                inputElement.oninput = function () {
                    var errorElement = getParent(inputElement, options.formGroupSelector).querySelector('.form-message');
                    errorElement.innerText = '';
                    getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                }
            });
        });
  
    }
}

Validator.isRequired = function(selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : message || 'Please fill this field!'
        }
    };
}



Validator.isEmail = function(selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'This field must be email';
        }
    };
}

Validator.minLength = function(selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự `;
        }
    };
}

Validator.isConfirm = function(selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không trùng khớp'; 
        }
    };
}