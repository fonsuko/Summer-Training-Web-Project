// JavaScript Document
$(document).ready(function(){
	// ส่วนของจังหวัดเมื่อมีการเปลี่ยนแปลง
	$("#geography").change(function(){
		$("#province").empty();//ล้างข้อมูล
		$("#Postcode").empty();//ล้างข้อมูล

		$.ajax({
			  url: "addcheck.php",//ที่อยู่ของไฟล์เป้าหมาย
			  global: false,
			  type: "GET",//รูปแบบข้อมูลที่จะส่ง
			  data: ({ID : $(this).val(),TYPE : "province"}), //ข้อมูลที่ส่ง  { ชื่อตัวแปร : ค่าตัวแปร }
			  dataType: "JSON", //รูปแบบข้อมูลที่ส่งกลับ xml,script,json,jsonp,text
			  async:false,
			  success: function(jd) { //แสดงข้อมูลเมื่อทำงานเสร็จ โดยใช้ each ของ jQuery
							var opt="<option value=\"0\" selected=\"selected\">---เลือกจังหวัด---</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["PROVINCE_ID"] +"'>"+val["PROVINCE_NAME"]+"</option>"
    						});
							$("#province").html( opt );//เพิ่มค่าลงใน Select ของอำเภอ
		   	  }
		});
		$("#GEO_ID").val($(this).val()); //กำหนดค่า ID ของจังหวัดที่เลือกให้กับ Textfield ของจังหวัด
	});


});
//ส่วนของ function เพื่อเพิ่มข้อมูลจังหวัดเข้าไปก่อน
function Add(){
		$.ajax({
			  url: "addcheck.php",
			  global: false,
			  type: "GET",
			  data: ({TYPE : "geography"}),
			  dataType: "JSON",
			  async:false,
			  success: function(jd) {
							var opt="<option value=\"0\" selected=\"selected\">---เลือกจังหวัด---</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["PROVINCE_ID"] +"'>"+val["PROVINCE_NAME"]+"</option>"
    						});
							$("#province").html( opt );
		   	  }
		});
}
