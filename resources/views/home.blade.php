

<body>
	
    <!--// Main Wrapper \\-->
    <div class="wm-main-wrapper">
       
        <!--// Mini Header \\-->
        <div class="wm-mini-header">
            <span class="wm-blue-transparent"></span>
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-mini-title">
                        </div>  
                    </div>
                </div>
            </div>    
        </div>
        <!--// Mini Header \\-->
       
               
            
		</div>
        
	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->
    <!--// Main Content \\-->
		<div class="wm-main-content">
<!--// Main Section \\-->
<div class="wm-main-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <div class="wm-search-course">
                    <h2 class="wm-short-title wm-color">Where was the International Space Station (ISS)?</h2>
                    <h3>Fill in the date and time below to find locations:</h3>
                    <form method="post" action="/test">
                      @csrf
                        <ul>
            
                            <p> Example: 2021/11/03 12:13:00
                            <li> <input type="text" id="date" name="date"  onblur="if(this.value == '') { this.value ='Y/M/D Hour:Min:Sec'; }" onfocus="if(this.value =='Y/M/D Hour:Min:Sec') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
<br>
                            <li> <input type="submit"> </li>
                        </ul>
                    </form>
                </div>
            </div>
    </div>
</div>
