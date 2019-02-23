$(function() {
    $("#datepicker").datepicker({ 
		startDate: new Date(),
			todayHighlight: true
		});
  });
$(function() {
    $("#datepicker1").datepicker({ 
		startDate: new Date(),
			todayHighlight: true
		});
  });
	function date_diff_indays (date1, date2) {
dt1 = new Date(date1);
dt2 = new Date(date2);
return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
console.log
}
/*------------Reservation Page----------------*/
function verify(){
            if (document.form1.fname.value == "") {
                alert("Please enter your First Name");
                return false;
            }
            if (document.form1.lname.value == "") {
                alert("Please enter your Last Name");
                return false;
            }
            if (document.form1.address.value == "") {
                alert("Please enter your Address");
                return false;
            }
            if(document.form1.mail.value ==""){
                alert("Please give the Mail Address");
                return false;
            }
            if (document.form1.phone.value == "") {
                alert("Please give the Mobile Number");
                return false;
            }
            if(document.form1.pay.value == ""){
                alert("Please select Payment Method");
                return false;
            }
        }
        function validateMail(){
            var mailval = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
            if (!document.getElementById("mail").value.match(mailval)) {
                document.getElementById("mail").style.border = "1px solid #ed143d";
                document.getElementById("MailErr").innerHTML = "Please Give a valid Email.";
                return false;
            }
            else{
                document.getElementById("MailErr").innerHTML = "";
                document.getElementById("mail").style.border = "1px solid #4caf50";
                return true;
            }
        }
        function validatePhone(){
            var check=/^\d{10}$/;
            if(document.form1.phone.value.match(check))
            {
                document.getElementById("phone").style.border = "1px solid #4caf50";
                document.getElementById("MobErr").innerHTML="";
        }
            else
            {
                document.getElementById("phone").style.border = "1px solid #ed143d";
                document.getElementById("MobErr").innerHTML="Please Enter Valid phone number";
            }
        }
/*------------Reservation Page----------------*/