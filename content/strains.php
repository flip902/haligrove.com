<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>

<?php include("header.php");?>


  <div class="bodyContainer">
    
    <div class="periscope">
        <div class="strains"></div>
        <div class="glass"></div>
    </div>
   

    <div class="strainsSection">
      <div class="row strip">
        <!-- images loaded from imageData.json using jquery script in sript.js -->
      </div>

                    

      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        <h2 id="modalTitle"></h2>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <div id="infoBarsPositioning">

          <div class="THCContainer">
            <h4>THC</h4>
            <div id="THC">
              <div></div>
            </div>
          </div>

          <div class="tasteContainer">
            <h4>Taste</h4>
            <div id="taste">
              <div></div>
            </div>
          </div>

          <div class="aromaContainer">
            <h4>Aroma</h4>
            <div id="aroma">
              <div></div>
            </div>
          </div>

          <div class="painContainer">
            <h4>Pain Releif</h4>
            <div id="pain">
              <div></div>
            </div>
          </div>

          <div class="insomniaContainer">
            <h4>Insomnia</h4>
            <div id="insomnia">
              <div></div>
            </div>
          </div>

          <div class="appetiteContainer">
            <h4>Appetite</h4>
            <div id="appetite">
              <div></div>
            </div>
          </div>

          <div class="overallContainer">
            <h4>Overall</h4>
            <div id="overall">
              <div></div>
            </div>
          </div>


        </div><!--  end of infobarsPositioning --> 
      <div id="caption"></div><!-- Modal Caption (Image Text) -->
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  </div><!-- End of body Container -->
<?php include("footer.php"); ?>