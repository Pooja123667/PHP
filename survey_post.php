<?php
///perfect as original withoiut any chnages!
?>


<!doctype html>
    <head>
        <title>JavaScript</title>
        <style>
            
            .qclass {
                width:50%;
                margin-left: auto;
                margin-right: auto;
                border-bottom: 5px solid #ff3968;
                padding: 10px 0px 10px 0px;
            }

            .qtxt {
                font-size: 20px;
            }

            textarea {
                width:100%;
            }
			.b1{
				border:3px solid #ff3968;
				height:60px;
				width:150px;
			}
        </style>
        <script>
            var q_no = 1;
            var long_q = "<div class='qclass'><div class='qtxt'>#qt</div>";
            long_q += "<div><textarea name='#qn'></textarea></div></div>";

            function add_q() {

                var temp = long_q;
                var textarea_name = "q" + q_no ;
                var question = "Q"+ q_no + ":" ;
                q_no++;
                var q_txt = prompt("Enter Your question ("+question+"):");
                question += q_txt;
                temp = temp.replace("#qt", question);
                temp = temp.replace("#qn", textarea_name);
                var div = document.createElement("div");
                div.innerHTML = temp;

                document.getElementById('main').appendChild(div);
            }

        </script>
    </head>
	<body style="background-color:#141314;color:white">
				<h1 style="text-align: center; color: #FFFFFF;font-size: 50px; padding-top: 10px;">Surveys </h1>

			<h2 style="text-align: center; color: #EFF283;font-size: 30px; padding-top: 0px;">Make a survey</h2>
					<div id='main'></div>
        <div style="text-align:center; padding-top:100px">
			<button class="b1" onclick="add_q()"><b>Add Question</b></button><br><br><br>
			<button class="b1" type="submit" name = "bb1"><b>Submit</b></button>
        </div>
    </body>
</html>