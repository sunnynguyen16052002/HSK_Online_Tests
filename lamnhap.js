    //Đối tượng Validator
    function Validator(options) {

        function validate(inputElement, rule) {
            var errorElement = inputElement.parentElement.querySelector('.form-message');
            var errorMessage = rule.test(inputElement.value);
            
            // var errorElement = inputElement.parentElement
            
            if(errorMessage) {
                errorElement.innnerTex = errorMessage;
                inputElement.parentElement.classList.add('invalid');
            } else {
                errorElement.innerTex = '';
                inputElement.parentElement.classList.remove('invalid');
            }
        }

        //lấy element của form (cái form lớn)
        var formElement = document.querySelector(options.form);

        if(formElement) {
            //các selector là một cái Array nên dùng forEach
            options.rules.forEach(function(rule) {
                
                var inputElement = formElement.querySelector(rule.selector);
                if(inputElement) {
                    //lắng nghe sự kiện click chuột ra khỏi ô input
                    inputElement.onblur = function () {
                        validate(inputElement, rule);
                        // console.log(inputElement.value)
                    }
                }
            });
        }
    }

    //Đinh nghĩa các điều luật cho liệu người nhập vào
    Validator.isRequired = function (selector) {
        
        return {
            selector: selector, //cặp key và value
            test: function (value) { //dùng để kiểm tra
                return value ? undefined : 'Vui lòng nhập trường này';
                
                //khi có lỗi --> trả ra Message lỗi
                //khi hợp lệ --> không trả ra gì (undefined)
            }
        };
    }

    Validator.isEmail = function() {
        return {
            selector: selector, 
            test: function () { 
                
            }
        };
    }









// ---------------------------------------------------------------------------------------------------
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>SUNNY HSK ONLINE</title>
//     <link rel="stylesheet" href="./assets/css/style_index.css">
//     <link rel="stylesheet" href="./assets/css/style_loginform.css">
//     <link rel="stylesheet" href="./assets/fonts/themify-icons-font (1)/themify-icons/themify-icons.css">
//     <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
//     <style>
//         table tr td
//         {
//             padding: 10px;
//             font-size: 14px;
//             text-align: center;
//             line-height: 1.6;
//             letter-spacing: 0.6;
            
//         }
//     </style>
// </head>
// <body>
    
//     <div class="main">
//         <div class="header">
//             <div class="header-nav">
//                 <ul class="nav">
//                     <li>
//                         <a href="#">
//                             听力 - Listening
//                             <i class="subnav-icon fa-solid fa-caret-down"></i>
//                         </a>
                    
//                         <ul class="subnav-Listening">
//                             <li><a class = "subnav__HSK1" href="./listen_practices.php">
//                                 <i class=" sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 1 
                               
//                             </a></li>
//                             <li><a class = "subnav__HSK2" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 2
//                             </a></li>
//                             <li><a class = "subnav__HSK3" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 3
//                             </a></li>
//                             <li><a class = "subnav__HSK4" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 4 上
//                             </a></li>
//                             <li><a class = "subnav__HSK4" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 4 下
//                             </a></li>
//                             <li><a class = "subnav__HSK5" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 5 上
//                             </a></li>
//                             <li><a class = "subnav__HSK5" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 5 下
//                             </a></li>
//                             <li><a class = "subnav__HSK6" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 6 上
//                             </a></li>
//                             <li><a class = "subnav__HSK6" href="">
//                                 <i class="sub-lis-icon fa-solid fa-headphones"></i>
//                                 Audio - 标砖教程 HSK 6 下
//                             </a></li>
//                         </ul>
//                     </li>
//                     <li>
//                         <a href="#">
//                             考题 - Tests
//                             <i class="subnav-icon fa-solid fa-caret-down"></i>
//                         </a>

//                         <ul class="subnav-Tests">
//                             <li>
//                                 <a class = "subnav__MT"  href="mocktests.php">
//                                     <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
//                                     Mock Tests
//                                 </a>
//                             </li>
//                             <li><a class = "subnav__HSK1" href="hsk1tests.php">
//                                 <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
//                                 HSK 1
//                             </a></li>
//                             <li><a class = "subnav__HSK2" href="">
//                                 <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
//                                 HSK 2
//                             </a></li>
//                             <li><a class = "subnav__HSK3" href="">
//                                 <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
//                                 HSK 3
//                             </a></li>
//                             <li><a class = "subnav__HSK4" href="">
//                                 <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
//                                 HSK 4
//                             </a></li>
//                             <li><a class = "subnav__HSK5" href="">
//                                 <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
//                                 HSK 5
//                             </a></li>
//                             <li><a class = "subnav__HSK6" href="">
//                                 <i class="sub-test-icon fa-solid fa-book-bookmark"></i>
//                                 HSK 6
//                             </a></li>
//                         </ul>

                       
//                     </li>

//                     <li>
//                         <a href="references.php">
//                             参考材料 - References
//                         </a>

//                     </li>

//                     <li><a href="shopping.php">
//                         购物 - Shopping
//                     </a></li>
                    
//                     <li><a href="">反馈 - Feed back</a></li>
//                 </ul>
    
//                 <ul class="singup_login">
//                     <li class="sign-up js-signup"> 登记 - Sign up </li>
//                     <li> | </li>
//                     <li class = "login js-login"> 登录 - Log in</li>
//                 </ul>
//             </div>
//         </div>

//         <div class="slicer">

//         </div>

//         <!-- ABOUT US -->

//         <div id="about-section">
//                 <h2 class="tittle-heading">About us</h2>
//                 <div class="line-center"></div>

//                 <p class="about-intro">
//                     SUNNY HSK ONLINE is a free and paid platform created to assist Chinese learners in finding materials, 
//                     textbooks and practicing skills. This platform is especially suitable for those preparing for the HSK exam, 
//                     helping them consolidate their knowledge and familiarize themselves with the interface of the exam questions 
//                     and endure the pressure of time. <br>

//                     <font style="font-style: italic;">
//                         ( SUNNY HSK ONLINE 是一个免费和付费的平台, 旨在帮助汉语学习者查找资料, 教材和练习技能。 
//                         这个平台特别适合准备HSK考试的人, 帮助他们巩固知识, 熟悉考题界面, 熬过时间的压力。)
//                     </font> 
//                 </p>

//                 <div class="about-container">
//                     <div class="column column-half">
                        
//                         <p class="about-mission">
//                             <i class="about-mission-icon ti-medall"></i> <br>
//                             SUNNY HSK ONLINE with the mission of supporting and creating favorable conditions 
//                             for those who plan to learn Chinese, are just starting to learn or have studied Chinese 
//                             for many years by providing a variety of materials with a variety of levels and needs
//                             different learning needs so that learners can flexibly choose their own learning materials.
//                             <br>
//                             SUNNY HSK ONLINE 的使命是为计划学习汉语、刚开始学习汉语或已经学习汉语多年的人提供支持和创造有利条件，
//                             提供各种层次和需求的各种材料。不同的学习需求，所以学习者可以灵活选择适合自己的学习材料。
//                         </p>
//                     </div>

//                     <div class="column column-half">
//                         <p class="about-vision">
//                             <i class="about-vision-icon ti-star"></i> <br>
//                             SUNNY HSK ONLINE with the mission of supporting and creating favorable conditions 
//                             for those who plan to learn Chinese, are just starting to learn or have studied Chinese 
//                             for many years by providing a variety of materials with a variety of levels and needs
//                             different learning needs so that learners can flexibly choose their own learning materials.
//                             <br>
//                             SUNNY HSK ONLINE 的使命是为计划学习汉语、刚开始学习汉语或已经学习汉语多年的人提供支持和创造有利条件，
//                             提供各种层次和需求的各种材料。不同的学习需求，所以学习者可以灵活选择适合自己的学习材料。
//                         </p>
                        
//                     </div>
//                     <div class="clear"></div>
//                 </div>
               

//         </div>

//         <!-- Why use IELTS Online Tests? -->
//         <div id="useweb-container">
//             <h2 class="tittle-heading">Why use Sunny HSK Online?</h2>
//             <div class="line-center"></div>
//             <table style="padding: 24px;">
//                 <tr>
//                     <td>
//                         <img src="./assets/img/real-test.png" alt="">
//                         <h3 class="table-useweb">Take recent actual HSK Tests</h3>
//                         <p>
//                             Real HSK Listening and HSK Reading tests based on actual HSK tests and 
//                             following the HAN BAN and Confucius Institute.
//                         </p> 
//                     </td>
//                     <td>
//                         <img src="./assets/img/community.png" alt="">
//                         <h3 class="table-useweb">Take recent actual IELTS Tests</h3>
//                         <p>
//                             Created by our community of HSK teachers, previous HSK examiners and HSK exam takers.
//                         </p> 
//                     </td>
//                     <td>
//                         <img src="./assets/img/tool.png" alt="">
//                         <h3 class="table-useweb">Take recent actual IELTS Tests</h3>
//                         <p>
//                             Our HSK Analytics is a tool that allows you to set a target HSK score, 
//                             analyse your progress and find how to improve.
//                         </p> 
//                     </td >
//                 </tr>

//                 <tr>
//                     <td>
//                         <img src="./assets/img/view.png" alt="">
//                         <h3 class="table-useweb">View HSK Score and Answer Explanations</h3>
//                         <p>
//                             After taking our HSK mock tests with real audio, 
//                             you can check your Listening or Reading band score and view your answer sheets.
//                         </p>
//                     </td>
//                     <td>
//                         <img src="./assets/img/free.png" alt="">
//                         <h3 class="table-useweb">FREE to use</h3>
//                         <p>
//                             Our online HSK tests are always free. We are here to help users for study abroad, 
//                             immigration and finding jobs.
//                         </p>
//                     </td>
//                     <td>
//                         <img src="./assets/img/icreasw.png" alt="">
//                         <h3 class="table-useweb">Increase your IELTS band score</h3>
//                         <p>
//                             Using our online tests for HSK preparation is proven to help students improve by 50 - 100 points .
//                         </p>
//                     </td>
//                 </tr>
//             </table>
//         </div>


//         <!-- CONTACT WITH US -->
//         <div id="contact-section">
//             <h2 class="tittle-heading">Contact us</h2>
//             <div class="line-center"></div>

//             <div class="form-container">
//                 <form action="" class="form">
//                     <div class="form__row">
//                         <select class="form__input" name="WhoAreYou" id="">
//                             <option value="">--You are--</option>
//                             <option value="">Student</option>
//                             <option value="">Teacher/Examiner</option>
//                             <option value="">Teaching Center</option>
//                             <option value="">Potential Parner</option>
//                         </select>
//                     </div>

//                     <div class="form__row">
//                         <select class="form__input" name="Problems" id="">
//                             <option value="">Payment Problems</option>
//                             <option value="">Report mistakes/bugs</option>
//                             <option value="">Suggestion</option>
//                             <option value="">Other</option>
//                         </select>
//                     </div>

//                     <div class="form__row">
//                         <input class="form__input" type="text" id="name" placeholder="Tell us more">
//                     </div>

//                     <div class="form__row">
//                         <input class="form__input" type="text" name="name" id="" placeholder="Name">
//                     </div>

//                     <div class="form__row">
//                         <input class="form__input" type="email" name="email" id="" placeholder="Email">
//                     </div>

//                     <div class="form__row">
//                         <textarea class="form__input" name="message" id="" cols="50" rows="30" placeholder="Message"></textarea>
//                     </div>

//                     <div class="form-btn">
//                         <input class="form-btn-sub" type="button" value="SEND">
//                     </div>

                    
//                 </form>
//             </div>
//         </div>
        
//         <div class="footer">

//             <div class="footer-infor">
//                 <ul class="footer-infor-list">
//                     <li><a href="">About us</a></li><li class="line-between"> | </li>
//                     <li><a href="">Contact us</a></li><li class="line-between"> | </li>
//                     <li><a href="">HSK exam schedule</a></li><li class="line-between"> | </li>
//                     <li><a href="">HSK information</a></li><li class="line-between"> | </li>
//                     <li><a href="">App</a></li>
//                 </ul>
//             </div>

//             <div class="social-list">
//                 <a href=""><i class="ti-facebook"></i></a>
//                 <a href=""><i class="ti-instagram"></i></a>
//                 <a href=""><i class="ti-youtube"></i></a>
//                 <a href=""><i class="ti-pinterest"></i></a>
//                 <a href=""><i class="ti-twitter"></i></a>
//                 <a href=""><i class="ti-linking"></i></a>
//             </div>
//             <p class="copyright">Copyright by SUNNY HSK ONLINE</p>
//         </div>


      
//     </div>

//     <!-- MODAL FORM ĐĂNG KÍ -->
//         <div class="modal-signin-container js-modal-signin-container">

//             <form action="" method="POST" class="form-modal-signin js-form-modal-signin" id="form-1">
//                 <p>Bạn đã có tài khoản? <a href="form-2">Đăng nhập</a></p>
//               <h3 class="modal-signin-heading">Đăng kí tài khoản</h3>
//               <p class="desc">Hãy đăng kí để trở thành thành viên của Sunny HSK Online ❤️</p>
          
//               <div class="spacer"></div>
          
//               <div class="form-group">
//                 <label for="fullname" class="form-label">Tên đầy đủ</label>
//                 <input id="fullname" name="fullname" type="text" placeholder="VD: Ánh Dương" class="form-control">
//                 <span class="form-message"></span>
//               </div>
          
//               <div class="form-group">
//                 <label for="email" class="form-label">Email</label>
//                 <input id="email" name="email" type="text" placeholder="VD: sunnyhsk@online.edu.vn" class="form-control">
//                 <span class="form-message"></span>
//               </div>

//               <!-- Thêm -->
//               <!-- <div class="form-group">
//                 <label for="email" class="form-label">Email</label>
//                 Nam: <input name="gender" type="radio" value="Male" class="form-control">
//                 Nữ: <input name="gender" type="radio" value="Female" class="form-control">
//                 <span class="form-message"></span>
//               </div> -->

//               <!-- <div class="form-group">
//                 <label for="province" class="form-label">Tỉnh/Tp</label>
//                 <select id="province" name="province"class="form-control">
//                     <option value="">--Chọn tỉnh/TP--</option>
//                     <option value="dn">Đồng Nai</option>
//                     <option value="bđ">Bình Định</option>
//                     <option value="hcm">TP.Hồ Chí Minh</option>
//                 </select>
//                 <span class="form-message"></span>
//               </div> -->

//               <!-- <div class="form-group">
//                 <label for="avatar" class="form-label">Ảnh đại diện</label>
//                 <input id="avatar" name="avatar" type="file" class="form-control">
//                 <span class="form-message"></span>
//               </div> -->


//           <!-- Thêm -->
//               <div class="form-group">
//                 <label for="password" class="form-label">Mật khẩu</label>
//                 <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
//                 <span class="form-message"></span>
//               </div>
          
//               <div class="form-group">
//                 <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
//                 <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
//                 <span class="form-message"></span>
//               </div>
          
//               <button class="form-submit">Đăng ký</button>
//             </form>

            
          
//         </div>

//     <!-- MODAL FORM ĐĂNG NHẬP -->
//     <div class="modal-login-container js-modal-login-container">

//         <form action="" method="POST" class="form-modal-login js-form-modal-login" id="form-2">
//           <h3 class="modal-login-heading">ĐĂNG NHẬP</h3>
//           <p class="desc">Đăng nhập để có nhiều trải nghiệm thú vị hơn tại Sunny HSK Online ❤️</p>
      
//           <div class="spacer"></div>
      
//           <div class="form-group">
//             <label for="email1" class="form-label">Email</label>
//             <input id="email1" name="email1" type="text" placeholder="VD: sunnyhsk@online.edu.vn" class="form-control">
//             <span class="form-message"></span>
//           </div>
      
//           <div class="form-group">
//             <label for="password1" class="form-label">Mật khẩu</label>
//             <input id="password1" name="password1" type="password" placeholder="Nhập mật khẩu" class="form-control">
//             <span class="form-message"></span>
//           </div>
      
//           <!-- <button class="form-submit">Đăng nhập</button> -->
//           <input class="form-submit" type="submit" name="submit-login" id="" value="Đăng nhập">
//         </form>
      
//     </div>

//     <!-- JAVASCRIPT CODE -->

//     <script src="./signin.js"></script>

//     <script src="./logout.js"></script>

//     <script src = "./validationForm.js"></script>
    
//     <script>
    
//     //Out put
//         Validator({
//             form:'#form-1',
//             formGroupSelector: '.form-group',
//             errorSelector: '.form-message',
//             rules: [
//                 Validator.isRequired('#fullname', 'Vui lòng nhập họ tên của bạn'),
//                 Validator.isRequired('#email', 'Vui lòng nhập trường này'),
//                 Validator.isEmail('#email'),
//                 Validator.minLength('#password', 6),
//                 Validator.isRequired('#password_confirmation'),
//                 // Validator.isRequired('#avatar'),
//                 // Validator.isRequired('#province'),
//                 // Validator.isRequired('input[name = "gender"]'),
//                 Validator.isConfirm('#password_confirmation', function () {
//                     return document.querySelector('#form-1 #password').value;
                    
//                 }, 'Mật khẩu nhập lại không chính xác'),
//             ],

//             onsubmit: function (data) {
//                 //CALL API
//             }
//         });

//         Validator({
//             form:'#form-2',
//             formGroupSelector: '.form-group',
//             errorSelector: '.form-message',
//             rules: [
//                 Validator.isRequired('#email1', 'Vui lòng nhập trường này'),
//                 Validator.isRequired('#password1'),
//                 Validator.isEmail('#email1'),
//             ],

//         });
//     </script>
    
// </body>
// </html>