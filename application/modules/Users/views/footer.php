   <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="<?php echo base_url(); ?>assets/js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url(); ?>assets/js/default-assets/active.js"></script>
    <script type="text/javascript">
        document.getElementById('defaultOpen').click();
        function highlight(rowID)
        {
            var tr = document.getElementById(rowID);
            var chk = document.getElementById("chk"+rowID);
            if(chk.checked == true)
            {
                tr.className += " highlight";
            }
            if(chk.checked == false)
            {
                tr.className = tr.className.replace(" highlight"," ");;
            } 
        }
        function checkAll(colID)
        {
            var chk = document.getElementById(colID);
            var tick = document.getElementsByClassName("chk "+colID);
            for(var i = 0; i < tick.length; i++)
            {
                if(chk.checked == true)
                {
                    tick[i].checked = true; 
                }
                if(chk.checked == false)
                {
                    tick[i].checked = false; 
                }
            }
        }

        function unhide(value)
        {
            console.log(value);
            if(value == "medication")
            {
                document.getElementById('medication').removeAttribute('hidden');
            }
            else
            {
                document.getElementById('medication').setAttribute('hidden','');
            }
        }
        function menu(evt, cityName)
        {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for(i = 0; i<tabcontent.length; i++)
            {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for(i = 0; i<tablinks.length; i++)
            {
                tablinks[i].className = tablinks[i].className.replace(" active","");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        function preview()
        {
            document.getElementById("image-preview").style.display = "block";
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("pic").files[0]);
            oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
            };
         };
        function openFile()
        {
            document.getElementById("pic").click();
        }
        function filter(evt)
        {
            var theEvent = evt || window.event;

              // Handle paste
              if (theEvent.type === 'paste')
              {
                  key = event.clipboardData.getData('text/plain');
              }
              else 
              {
              // Handle key press
                  var key = theEvent.keyCode || theEvent.which;
                  key = String.fromCharCode(key);
              }
              var input = document.getElementById("amount");
              if(input.length == 9)
              {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
              }
              var regex = /[0-9]|\./;
              if( !regex.test(key) )
              {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
              }
        }
        function filterAll(evt)
        {
            var theEvent = evt || window.event;

              // Handle paste
              if (theEvent.type === 'paste')
              {
                  key = event.clipboardData.getData('text/plain');
              }
              else 
              {
              // Handle key press
                  var key = theEvent.keyCode || theEvent.which;
                  key = String.fromCharCode(key);
              }
              var input = document.getElementById("change");
              if(input.length == 9)
              {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
              }
              theEvent.returnValue = false;
        }
        function modal()
        {
            var status = document.getElementById("status").value;
            if(status == '1')
            {
                alert("Successful!");
            }
            if(status == '0')
            {
                status = '0';
            }
        }
        function changes()
        {
            var amount = document.getElementById("amount").value;
            var total = document.getElementById("total").value;
            document.getElementById("change").value = amount - total;
            if(document.getElementById("change").value < 0)
            {
                document.getElementById("change").style.backgroundColor = "#f36894";
            }
            else
            {
                document.getElementById("change").style.backgroundColor = "#fff";
            }
        }
    </script>