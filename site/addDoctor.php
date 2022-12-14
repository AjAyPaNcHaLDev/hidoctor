<!DOCTYPE html>
<html lang="en">
<body class="mini-sidebar fix-header">
    <link href="../plugins/components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
   
    <!-- Preloader -->

<div class="preloader">
<div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">

<!-- ===== Top-Navigation- Left-Sidebar  ===== -->

<?php include "./header.php";?>
<!-- ===== Top-Navigation- Left-Sidebar end
===== -->
<!-- Page Content -->
<div class="page-wrapper">
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            </div>
     <?php


if(isset($_SESSION["session_status"]))
if($_SESSION["session_status"]){
echo"ok";
}else{
echo" yah not ok";
}
else echo"not ok";

?>

<div class="row">
<div class="col-md-4">
        <div class="white-box">
            <h3 class="box-title m-b-0">Add Doctor</h3>
            <p class="text-muted m-b-30 font-13"> please fill all the information</p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form onsubmit="registerUser()" id="registerUser" action="server/userCRUD.php" method="post">
                       
                        <div class="form-group">
                            <label for="exampleInputuname">Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name"> </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-email"></i></div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"> </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class="icon-user"></i></div>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone"> </div>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class=" icon-calender"></i></div>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="01/01/1999"> </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Membership</label>
                    <div class="radio-list">
                        <label class="radio-inline p-0">
                            <div class="radio radio-info">
                                <input type="radio" name="radio" onchange="docType()" id="doctor" value="option1">
                                <label for="radio1">Doctor</label>
                            </div>
                        </label>
                        <label class="radio-inline">
                            <div class="radio radio-info">
                                <input type="radio" name="radio" onchange="docType()" id="chemeisty" value="option2">
                                <label for="radio2">chemeisty</label>
                            </div>
                        </label>
                    </div>

                 
                </div>
                
                <div class="form-group" id="specializationBox">
                    <label for="specialization">Specialization</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class=" icon-calender"></i></div>
                        <input type="text" class="form-control" id="specialization" name="specialization" placeholder="specialization"> </div>
                </div>
             
                <div class="form-group">
                    <label for="address">Address</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class=" icon-calender"></i></div>
                        <input type="text" class="form-control" id="address" name="address" placeholder="address"> </div>
                </div>


                <div class="form-group">
                    <label for="city">City</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class=" icon-calender"></i></div>
                        <input type="text" class="form-control" id="city" name="city" placeholder="city"> </div>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <div class="input-group">   
                        <div class="input-group-addon"><i class=" icon-calender"></i></div>
                        <input type="text" class="form-control" id="state" name="state" placeholder="state"> </div>
                </div>

        <div id="alert"></div>
                <div class="form-group">
                <button type="submit" style="float:right;" name="addUser" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>

        </div>
    </div>
    
        </div>
    </div>
    <!-- vvvvvvvvvvv -->
    <div class="col-sm-8">
        <div class="white-box">
            <h3 class="box-title m-b-0">Data Export</h3>
            <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
            <div class="table-responsive">
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Serial No</th>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </tfoot>
                    <tbody id="tableBody">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




    </div>
    
</div>
<!-- ===== Right-Sidebar ===== -->
<div class="right-sidebar">
    <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
        <div class="r-panel-body">
        
        </div>
    </div>
</div>
<!-- ===== Right-Sidebar-End ===== -->
</div>
<!-- /.container-fluid -->
<footer class="footer t-a-c"> ?? 2017 Cubic Admin
</footer>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- ==============================
Required JS Files
=============================== -->
<!-- ===== jQuery ===== -->
<script src="../plugins/components/jquery/dist/jquery.min.js"></script>
<!-- ===== Bootstrap JavaScript ===== -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ===== Slimscroll JavaScript ===== -->
<script src="js/jquery.slimscroll.js"></script>
<!-- ===== Wave Effects JavaScript ===== -->
<script src="js/waves.js"></script>
<!-- ===== Menu Plugin JavaScript ===== -->
<script src="js/sidebarmenu.js"></script>
<!-- ===== Custom JavaScript ===== -->
<script src="js/custom.js"></script>
<!-- ===== Plugin JS ===== -->
<!-- ===== Style Switcher JS ===== -->
<script src="../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="../plugins/components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<script>

function initTable(){
    $('#example23').DataTable();

        var table = $('#example').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2    
            }],
            "order": [
                [2, 'asc']
            ],
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;
                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                        last = group;
                    }
                });
            }
        });
        // Order by the grouping
        $('#example tbody').on('click', 'tr.group', function() {
            var currentOrder = table.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table.order([2, 'desc']).draw();
            } else {
                table.order([2, 'asc']).draw();
            }
        });
   
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
}
    </script>








        <script src="../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

<?php
echo"<input type='text' id='eID' value='".$_SESSION['eid']."'/>";
?>
<script>
      $("#specializationBox").hide();
function docType(){
    if ($("#doctor").is(":checked")) {
        $("#specializationBox").show();

}else{
    $("#specializationBox").hide();
//     doctor
// chemeisty
}   
    
}


function registerUser(){
event.preventDefault();
var name=$('#name').val();
var phone=$('#phone').val();
var dob=$('#dob').val();
var specialization=$('#specialization').val();
var address=$('#address').val();
var city=$('#city').val();
var state=$('#state').val();
var exID=$('#eID').val();
var type="Doctor";
if ($("#doctor").is(":checked")) {
         
    type="doctor";

}else{
    type="chemeisty";
}

alert(exID);
let xhr=new XMLHttpRequest();
xhr.open('POST','server/userCRUD.php');
xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
data="insertDoctor="+JSON.stringify({exID,name,phone,dob,specialization,address,city,state,type});
 xhr.send(data);
 xhr.onreadystatechange = function()
	  	{
	    	if (xhr.readyState == 4 && xhr.status == 200){

                alert(xhr.responseText);
                

            }
	    
	  	};

xhr.onerror = function() {  
  alert("Request failed");
};

}
  
 
function fatchAdmins(){
 
 let xhr=new XMLHttpRequest();
 xhr.open('POST','server/api.php',true);
 xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
 data="callApi="+JSON.stringify("{table:getAdminTable}");
 xhr.onreadystatechange = function()
       {
         tbody=document.getElementById("tableBody");
         if (xhr.readyState == 4 && xhr.status == 200)
         {
             result=JSON.parse(xhr.response);   
             $("#tableBody").empty();
             i=0;
 result.forEach(element => {
     $("#tableBody").append("<tr><td>"+i+"</td><td>"+element.id+"</td><td>"+element.type+"</td><td>"+element.name+"</td><td>"+element.phone+"</td><td>"+element.email+"</td><td>"+element.id+"</td><tr>");
   i++;
 });
 
         }
       };
       xhr.send(data);
       xhr.onprogress = function(event) {
 // alert("on progress");
 };
 xhr.onerror = function() {
 alert("Request failed");
 };
 }
 


fatchAdmins();
 
</script>