

<body>
	
    
    <div class="wm-main-wrapper">
       
        
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
        
       
               
            
		</div>
        
	<div class="clearfix"></div>
    </div>

		<div class="wm-main-content">

<div class="wm-main-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4">
                <div class="wm-search-course">
                    <h2 class="wm-short-title wm-color">Where was the International Space Station (ISS)? </h2>
                    <h3>Fill in the date and time below to find the locations:</h3>
                    <form method="post" action="/test">
                      @csrf
                        <ul>
            
                            <p> Example: 2021/11/03 12:15:00
                            <li> <input type="text" id="date" name="date"  onblur="if(this.value == '') { this.value ='YYYY/MM/DD Hour:Min:Sec'; }" onfocus="if(this.value =='YYYY/MM/DD Hour:Min:Sec') { this.value = ''; }"> <i class="wmicon-search"></i> </li>
<br>
                            <li> <input type="submit"> </li>
                        </ul>
                    </form>
                </div>
            </div>
    </div>
</div>
