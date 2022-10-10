<?php include('comtop.php'); ?>
<div class="body_login">
     <div class="bg">
          <div class="bg-box">
               <div class="bg_log_in">
                    <h4 class="text_login d-none d-md-block" onclick="sign_in()">เข้าสู่ระบบ</h4>
                    <h4 class="text_Signup d-none d-md-block" onclick="apply()">สมัครผู้ใช้งาน</h4>
                    <div class="box-login">
                         <img class="logo_login" src="img/DIPROM_Color_VERTICAL.png" alt="">
                         <h4 class="text_welcome">Welcome to </h4>
                         <h3 class="text-DIP">DIPROM</h3>
                         <h6 class="text-DEP">DEPARTMENT OF INDUSTRIAL PROMOTION</h6>
                         <form action="" class="formlogin d-flex flex-column">
                              <input type="text" class="formUsermane form-control" placeholder="Username">
                              <input type="text" class="formPassword form-control" placeholder="Password">
                              <button class="but_welcome">เข้าสู่ระบบ</button>
                         </form>
                         <p class="howto_apply">ดูวิธีการสมัคร</p>
                         <h4 class="text_login  d-sm-block d-md-none d-sm-none" onclick="sign_in()">เข้าสู่ระบบ</h4>
                         <h4 class="text_Signup d-sm-block d-md-none" onclick="apply()">สมัครผู้ใช้งาน</h4>
                    </div>
                    <div class="box-apply">
                         <img class="logo_login" src="img/DIPROM_Color_VERTICAL.png" alt="">
                         <h4 class="text_apply">การสร้างบัญนี้ </h4>
                         <p class="text_details">พิมพ์ชื่อ-นามสกุลและอีเมลล์พร้อมทั้ง <br> แนบฟอร์มที่กรอกรายละเอียด อย่างครบถ้วน <br>
                                   <a href="#"><u class="form_link">โหลดแบบฟอร์มขอสร้างบัญชี </u> </a> </p>
                         <h5 class="fill_out">กรอกข้อมูล : </h5>
                         <form action="" class="formapply d-flex flex-column">
                              <input type="text" class="formUsermane form-control" placeholder="*ชื่อ">
                              <input type="text" class="formUsermane form-control" placeholder="*นามสกุล">
                              <input type="email" class="formUsermane form-control" placeholder="*อีเมล์">
                              <h5 class="form">แบบฟอร์ม : </h5>
                              <div class="upload">
                                   <button type="button" class="warning">
                                        <i class="fa fa-upload"></i> Upland file 
                                        <input type="file">
                                   </button>
                              </div>
                              <p class="text_details_2">
                              ในการสร้างบัญชีหมายความว่าคุณยอมรับ  <a href="#"><u>นโยบาย <br>  ความเป็นส่วนตัว </u> </a>
                              และ <u>  <a href="#"> ข้อกำหนดการใช้ </u> </a></a> ของ DIP Portal
                              </p>
                              <button class="but_apply">สร้างบัญชี</button>
                              <h4 class="text_login_apply  d-sm-block d-md-none" onclick="sign_in()">เข้าสู่ระบบ</h4>
                              <h4 class="text_Signup_apply  d-sm-block d-md-none" onclick="apply()">สมัครผู้ใช้งาน</h4>
                         </form>
                    </div>
               </div>   
          </div>
     </div>
</div>

<?php include('combottom.php'); ?>