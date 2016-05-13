<html>
	<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link type="text/css" rel="stylesheet" href="color-style.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery.ui.touch-punch.min.js"></script>

        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js'></script>
        <script type="text/javascript" href="PageWalkthrough.js"></script>
        <!-- Standard CSS Includes -->
        <link type="text/css" rel="stylesheet" href="../plugins/css/jquery.pagewalkthrough.css" />
        <link type="text/css" rel="stylesheet" href="style.css"/>

        <!-- Standard Script Includes -->
        <script type="text/javascript" src="../plugins/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../plugins/jquery.pagewalkthrough.js"></script>
        <script type="text/javascript" src="page.js"></script>
	</head>
	<body onload="func1();">
        <div class="content">
		<!-- Javascript -->
            <script>
            $(function () {
                    /* basic */
                    $("#dragbasic div[id^='drag']").draggable({
                            containment: "#dragbasic",
                            stack: ".drag"
                    });
             
                    /* X axis only */
                    $("#drag-x div[id^='drag']").draggable({
                            containment: "#drag-x",
                            stack: ".drag",
                            axis: "x"
                    });
             
                    /* Y axis only */
                    $("#drag-y div[id^='drag']").draggable({
                            containment: "#drag-y",
                            stack: ".drag",
                            axis: "y"
                    });
             
             
                    /* make draggable div always on top */
                    $("div[id^='drag']").mousedown(function () {
                            $("div[id^='drag']").each(function () {
                                    var seq = $(this).attr("id").replace("drag", "");
                                    $(this).css('z-index', seq);
                            });
                    });
            });
            ///
            var pass=false;
             function func1() {
                    //document.getElementById( 'textbox' ).value=rgb();		
                        
                        document.getElementById( 'light' ).style.backgroundColor=rgb();
                        document.getElementById( 'lamp' ).style.backgroundColor=rgb();
                        document.getElementById( 'lamp' ).style.boxShadow ="0px 0px 40px 30px "+rgb();
                        document.getElementById( 'r_num' ).value = document.getElementById('inputrgb_r').value
                        document.getElementById( 'g_num' ).value = document.getElementById('inputrgb_g').value
                        document.getElementById( 'b_num' ).value = document.getElementById('inputrgb_b').value
                        document.getElementById( 'x_num' ).value = document.getElementById('inputrgb_x').value+"  Lv"
                        
                    
            } 


            function func2() {
                pass = true;
            }
            function func3() {
                pass = false;
            }

            function rgb(){
                    var hex = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f");
                        
                    var x =document.getElementById('inputrgb_x').value;
                    var r=Math.floor(document.getElementById('inputrgb_r').value*x*0.01);
                    var g=Math.floor(document.getElementById('inputrgb_g').value*x*0.01);
                    var b=Math.floor(document.getElementById('inputrgb_b').value*x*0.01);
                    var one =hex[Math.floor(r/16)];
                    var two =hex[r%16];
                    var three =hex[Math.floor(g/16)];
                    var four =hex[g%16];
                    var five =hex[Math.floor(b/16)];
                    var six =hex[b%16];	
                    return '#'+one+two+three+four+five+six;
                
                    
                    
            }

            </script>
		
		  <!-- -->
				<br>				
				<!--
				<input type="text" id="textbox" value="test"/>	
				<button onclick="func2()">ss</button> 
				-->
			<div class="setblock" id="TT" >	
				
				<div class="blue" style="background-color:blue;float: left;padding:20px;margin:10px;">				
					<input type="range" id="inputrgb_b"  onclick='func1()' onchange='func1()' min = "0" max = "255" >	<br><br><br>												
					<input type="text" id="b_num" value="0" readonly >
					
					</div>
					  
				<div class="red" style="background-color:red;float: left;padding:20px;margin:10px;">				
					<input type="range" id="inputrgb_r"  onclick='func1()' onchange='func1()' min = "0" max = "255" > <br><br><br>
					<input type="text" id="r_num" value="0" readonly >
					</div>
				<div class="green" style="background-color:green;float: left;padding:20px;margin:10px;">				
					<input type="range" id="inputrgb_g"onclick='func1()' onchange='func1()'min = "0" max = "255" > <br><br><br>
					<input type="text" id="g_num" value="0" readonly >
					</div>
				<div class="Blight" style="background-color:black;float: left;padding:20px;margin:10px;color:#FFF;">				
					光線強度
					<input type="range" id="inputrgb_x" onclick='func1()' onchange='func1()' value="100" min = "0" max = "100" > <br><br><br>
					<input type="text" id="x_num" value="0" readonly ><br><br><br>					
					
				</div>
                
			</div>
                
			<br><br>
			<div class="lamp" id="lamp">    
				
			</div> 
			
			
 
			<div id="dragbasic" class="setblock">    
				<div id="light" "></div>
                <!--
                <div id="drag1" class="drag"></div>	
				
                -->
			</div> 
		  
			<!--
			<div id="drag-x">    
				<div id="drag1" class="drag">目標</div> 
				
			</div>  
			-->
            
            
            
            
            
            
            
            
            
            
            
            
           <!--
			網站引導內容  
			-->
            <div id="type-First" style="display:none;">
                <a href="javascript:;" class="fin-step" style="float:right;">X</a>
                <p class="tooltipTitle">歡迎體驗<br>光的三原色</p>
                <p>這個網頁你能調動左方的拉調來改變配色喔</p>
                
                <br>
                <a href="javascript:;" class="next-step" style="float:right;">下一步(Next)</a>
                <a href="javascript:;" class="prev-step" style="float:left;">上一步(Prev)</a>
            </div>

            <div id="type-mid1" style="display:none;">
                <a href="javascript:;" class="fin-step" style="float:right;">X</a>
                <p class="tooltipTitle">這邊是 "藍色" 的調動紐</p>
                <p>拉動條桿改變 "藍色" 配量</p>
                <br>
                <a href="javascript:;" class="next-step" style="float:right;">下一步(Next)</a>
                <a href="javascript:;" class="prev-step" style="float:left;">上一步(Prev)</a>
            </div>
            <div id="type-mid2" style="display:none;">
                <a href="javascript:;" class="fin-step" style="float:right;">X</a>
                <p class="tooltipTitle">這邊是 "紅色" 的調動紐</p>
                <p>拉動條桿改變 "紅色" 配量</p>
                <br>
                <a href="javascript:;" class="next-step" style="float:right;">下一步(Next)</a>
                <a href="javascript:;" class="prev-step" style="float:left;">上一步(Prev)</a>
            </div>
            <div id="type-mid3" style="display:none;">
                <a href="javascript:;" class="fin-step" style="float:right;">X</a>
                <p class="tooltipTitle">這邊是 "綠色" 的調動紐</p>
                <p>拉動條桿改變 "綠色" 配量</p>
                <br>
                <a href="javascript:;" class="next-step" style="float:right;">下一步(Next)</a>
                <a href="javascript:;" class="prev-step" style="float:left;">上一步(Prev)</a>
            </div>
            <div id="type-mid4" style="display:none;">
                <a href="javascript:;" class="fin-step" style="float:right;">X</a>
                <p class="tooltipTitle">這邊是 "亮度" 的調動紐</p>
                <p>拉動條桿改變 "亮色" 配量<br>亮度是很特別的一種，它並不是指白色喔，調動之後看看變化吧</p>
                <br>
                <a href="javascript:;" class="next-step" style="float:right;">下一步(Next)</a>
                <a href="javascript:;" class="prev-step" style="float:left;">上一步(Prev)</a>
            </div>
            <div id="type-mid5" style="display:none;">
                <a href="javascript:;" class="fin-step" style="float:right;">X</a>
                <p class="tooltipTitle">這邊是配色的結果</p>
                <p>這邊會及時依照左方配色區調出最後顏色喔</p>
                <br>
                <a href="javascript:;" class="next-step" style="float:right;">下一步(Next)</a>
                <a href="javascript:;" class="prev-step" style="float:left;">上一步(Prev)</a>
            </div>

            <div id="type-end" style="display:none;">
                <p class="tooltipTitle">趕快來玩看看吧</p>
                <p>若網頁有問題請反映至 gavin19950511@gmail.com</p>
                <a href="javascript:;" class="fin-step" style="float:right;">結束</a>
                <br>
            </div>
		
		</div>
	</body>
</html>