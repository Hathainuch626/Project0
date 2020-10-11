@extends('layouts.app')

@section('content')
<h2></h2><br><h2></h2><br>
<center><?php echo $_GET['id_name'];
use App\infoUser;
    $usertest=infoUser::where('_id', $_GET['id_menber'])->first();
?></center>
<!-- <form action="" enctype="multipart/form-data" role="form" method="get">

<input type="hidden" name="id_name" value="">
    <input id="img" class="form-control filestyle margin images" data-input="false" type="file" data-buttonText="Upload Logo" data-size="sm" data-badge="false" onchange="uploadImage();" name="images"/>
    <input type="submit" value="save">
</form> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 40px 15px 10px">
                <div class="card-header">{{ __('แบบฟอร์มกรอกประวัติส่วนตัว') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ url('updateinfomenber') }}">
                      
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ตระกูล') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="id_name" value="<?php echo $_GET['id_name'];?>">
                                <input type="hidden" name="id_menber" value="<?php echo $usertest->_id;?>">
                                <input id="name" type="text" placeholder="กรอกชื่อครอบครัว" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                            <div class="form-group row">
                                <label for="fname" class="col-md-2 col-form-label text-md-right">{{ __('ชื่อ') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกชื่อจริง" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus >

                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                <label for="lname" class="col-md-2 col-form-label text-md-right">{{ __('นามสกุล') }}</label> 
                             <div class="col-md-4">
                                    <input type="lname" placeholder="กรอกนามสกุล" class="form-control @error('lname') is-invalid @enderror"  name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        
                            
                            <div class="form-group row">
                                <label for="dmy" class="col-md-2 col-form-label text-md-right">{{ __('วัน/เดือน/ปีเกิด') }}</label>                           
                                <div class="col-md-4">                                   
                                    
                                        <input type="date" class="form-control @error('dmy') is-invalid @enderror" name="dmy" value="{{ old('dmy') }}" required autocomplete="dmy" autofocus>
                                    
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                    <label for="inputSex" class="col-md-6 col-form-label text-md-right">{{ __('เพศ') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputSex" class="form-control " >
                                                <option selected>เลือก</option>
                                                <option>ชาย</option>
                                                <option>หญิง</option>
                                                <option>ไม่ระบุ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="career" class="col-md-2 col-form-label text-md-right">{{ __('อาชีพ') }}</label>

                            <div class="col-md-4">
                                <div class="col-md-8">
                                    <select id="career" class="form-control " name="career">
                                        <option selected>เลือก</option>
                                        <option>อาจารย์ ครู</option>
                                        <option>ตำรวจ</option>
                                        <option>ทหาร</option>
                                        <option>แพทย์</option>
                                        <option>วิศวกร</option>
                                        <option>นักบัญชี</option>
                                        <option>นักบิน</option>
                                        <option>สถาปนิก</option>
                                        <option>ข้าราชการ</option>
                                        <option>ช่างไม้</option>
                                        <option>รับจ้าง</option>
                                        <option>ก่อสร้าง</option>
                                        <option>นักธุรกิจ</option>
                                        <option>ธุรกิจส่วนตัว</option>
                                        <option>ฟรีแลนซ์</option>
                                        <option>มัคคุเทศก์</option>
                                        <option>ช่างเย็บผ้า</option>
                                        <option>ค้าขาย</option>
                                        <option>ขายเสื้อผ้า</option>
                                        <option>ขายผัก,ผลไม้</option>
                                        <option>ขายของทั่วไป</option>
                                        <option>ซักรีด</option>
                                    </select>
                                </div>
                               
                            </div>
                                
                                <label for="Pnumber" class="col-md-2 col-form-label text-md-right">{{ __('เบอร์โทรศัพท์') }}</label> 
                             <div class="col-md-4">
                                    <input type="Pnumber" placeholder="กรอกเบอรโทรศัพท์" class="form-control @error('Pnumber') is-invalid @enderror"  name="Pnumber" value="{{ old('Pnumber') }}" required autocomplete="Pnumber" autofocus>
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="address">ที่อยู่ปัจจุบัน:</label>
                            <input type="address" class="form-control @error('address') is-invalid @enderror"  name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="inputprovince" class="col-md-6 col-form-label text-md-right" >{{ __('จังหวัด') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputprovince" class="form-control " name="inputprovince">
                                                <option selected>เลือก</option>
                                                <option>กรุงเทพมหานคร</option>
                                                <option>กาญจนบุรี</option>
                                                <option>จันทบุรี</option>
                                                <option>ฉะเชิงเทรา</option>
                                                <option>ชลบุรี</option>
                                                <option>ชัยนาท</option>
                                                <option>ตราด</option>
                                                <option>นครนายก</option>
                                                <option>นครปฐม</option>
                                                <option>พระนครศรีอยุธยา</option>
                                                <option>เพชรบุรี</option>
                                                <option>ระยอง</option>
                                                <option>ราชบุรี</option>
                                                <option>ลพบุรี</option>
                                                <option>สมุทรปราการ</option>
                                                <option>สมุทรสงคราม</option>
                                                <option>สมุทรสาคร</option>
                                                <option>สระแก้ว</option>
                                                <option>นนทบุรี</option>
                                                <option>สระบุรี</option>
                                                <option>ปทุมธานี</option>
                                                <option>สิงห์บุรี</option>
                                                <option>ประจวบคีรีขันธ์</option>
                                                <option>สุพรรณบุรี</option>
                                                <option>ปราจีนบุรี</option>
                                                <option>กาฬสินธ์</option>
                                                <option>ขอนแก่น</option>
                                                <option>ชัยภูมิ</option>
                                                <option>นครพนม</option>
                                                <option>นครราชสีมา</option>
                                                <option>บุรีรัมย์</option>
                                                <option>มหาสารคาม</option>
                                                <option>มุกดาหาร</option>
                                                <option>ยโสธร</option>
                                                <option>ร้อยเอ็ด</option>
                                                <option>เลย</option>
                                                <option>ศรีสะเกษ</option>
                                                <option>สกลนคร</option>
                                                <option>สุรินทร์</option>
                                                <option>หนองคาย</option>
                                                <option>หนองบัวลำภู</option>
                                                <option>อำนาจเจริญ</option>
                                                <option>อุดรธานี</option>
                                                <option>อุบลราชธานี</option>
                                                <option>เชียงราย</option>
                                                <option>เชียงใหม่</option>
                                                <option>น่าน</option>
                                                <option>พะเยา</option>
                                                <option>แพร่</option>
                                                <option>แม่ฮ่องสอน</option>
                                                <option>ลำปาง</option>
                                                <option>ลำพูน</option>
                                                <option>อุตรดิตถ์</option>
                                                <option>กระบี่</option>
                                                <option>ชุมพร</option>
                                                <option>ตรัง</option>
                                                <option>นครศรีธรรมราช</option>
                                                <option>นราธิวาส</option>
                                                <option>ปัตตานี</option>
                                                <option>พังงา</option>
                                                <option>พัทลุง</option>
                                                <option>ภูเก็ต</option>
                                                <option>ระนอง</option>
                                                <option>สตูล</option>
                                                <option>สงขลา</option>
                                                <option>สุราษฎร์ธานี</option>
                                                <option>ยะลา</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                            </div>
                               
                                <label for="postalcode" class="col-md-4 col-form-label text-md-right">{{ __('รหัสไปรษณีย์') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกรหัสไปรษณีย์" class="form-control @error('postalcode1') is-invalid @enderror" name="postalcode" value="{{ old('postalcode') }}" required autocomplete="postalcode" autofocus >
                                
                                    @error('postalcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="address">ที่อยู่ตามทะเบียนบ้าน:</label>
                            <input type="address" class="form-control @error('address') is-invalid @enderror"  name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                    <div class="form-group row">
                                        <label for="inputprovince2" class="col-md-6 col-form-label text-md-right">{{ __('จังหวัด') }}</label>
                                        <div class="col-md-6">
                                            <select id="inputprovince2" class="form-control " name="inputprovince2" >
                                                <option selected>เลือก</option>
                                                <option>กรุงเทพมหานคร</option>
                                                <option>กาญจนบุรี</option>
                                                <option>จันทบุรี</option>
                                                <option>ฉะเชิงเทรา</option>
                                                <option>ชลบุรี</option>
                                                <option>ชัยนาท</option>
                                                <option>ตราด</option>
                                                <option>นครนายก</option>
                                                <option>นครปฐม</option>
                                                <option>พระนครศรีอยุธยา</option>
                                                <option>เพชรบุรี</option>
                                                <option>ระยอง</option>
                                                <option>ราชบุรี</option>
                                                <option>ลพบุรี</option>
                                                <option>สมุทรปราการ</option>
                                                <option>สมุทรสงคราม</option>
                                                <option>สมุทรสาคร</option>
                                                <option>สระแก้ว</option>
                                                <option>นนทบุรี</option>
                                                <option>สระบุรี</option>
                                                <option>ปทุมธานี</option>
                                                <option>สิงห์บุรี</option>
                                                <option>ประจวบคีรีขันธ์</option>
                                                <option>สุพรรณบุรี</option>
                                                <option>ปราจีนบุรี</option>
                                                <option>กาฬสินธ์</option>
                                                <option>ขอนแก่น</option>
                                                <option>ชัยภูมิ</option>
                                                <option>นครพนม</option>
                                                <option>นครราชสีมา</option>
                                                <option>บุรีรัมย์</option>
                                                <option>มหาสารคาม</option>
                                                <option>มุกดาหาร</option>
                                                <option>ยโสธร</option>
                                                <option>ร้อยเอ็ด</option>
                                                <option>เลย</option>
                                                <option>ศรีสะเกษ</option>
                                                <option>สกลนคร</option>
                                                <option>สุรินทร์</option>
                                                <option>หนองคาย</option>
                                                <option>หนองบัวลำภู</option>
                                                <option>อำนาจเจริญ</option>
                                                <option>อุดรธานี</option>
                                                <option>อุบลราชธานี</option>
                                                <option>เชียงราย</option>
                                                <option>เชียงใหม่</option>
                                                <option>น่าน</option>
                                                <option>พะเยา</option>
                                                <option>แพร่</option>
                                                <option>แม่ฮ่องสอน</option>
                                                <option>ลำปาง</option>
                                                <option>ลำพูน</option>
                                                <option>อุตรดิตถ์</option>
                                                <option>กระบี่</option>
                                                <option>ชุมพร</option>
                                                <option>ตรัง</option>
                                                <option>นครศรีธรรมราช</option>
                                                <option>นราธิวาส</option>
                                                <option>ปัตตานี</option>
                                                <option>พังงา</option>
                                                <option>พัทลุง</option>
                                                <option>ภูเก็ต</option>
                                                <option>ระนอง</option>
                                                <option>สตูล</option>
                                                <option>สงขลา</option>
                                                <option>สุราษฎร์ธานี</option>
                                                <option>ยะลา</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                            </div>
                               
                                <label for="postalcode2" class="col-md-4 col-form-label text-md-right">{{ __('รหัสไปรษณีย์') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกรหัสไปรษณีย์" class="form-control @error('postalcode2') is-invalid @enderror" name="postalcode2" value="{{ old('postalcode2') }}" required autocomplete="postalcode2" autofocus >
                                
                                    @error('postalcode2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>   
                         
                        
                        <div class="form-group row">
                                <label for="facebook" class="col-md-2 col-form-label text-md-right">{{ __('facebook') }}</label>
                            
                                <div class="col-md-4">
                                    <input type="text" placeholder="กรอกชื่อหรืออีเมล์" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook" autofocus >

                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="margin: 10px 10px 20px 250px">บันทึกประวัติส่วนตัว</button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">ยืนยันข้อมูล</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        คุณได้บันทึกประวัติส่วนตัวเรียบร้อยแล้ว
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">ตกลง</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
