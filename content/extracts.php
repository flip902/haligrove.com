<?php include("header.php");?>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div id="myModal" style="display: none"></div>
<div class="extractsbodyContainer">
    

    <div class="periscope">
        <div class="extracts"></div>
        <div class="glass"></div>
    </div>        
   
    <div class="extractsPositioning">
        <div class="row width extractWidth">

	    <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="sativa">sativa</div>
			<div class="new">new</div>
                        <img src= "../images/littleFarmSourTangie.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Sour Tangie</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Little Farma</h3>
                        <p class="descriptionP">Citrus Orange taste.
                        Great for depression and stress.
                        </p>
                    </div>
                       <br> 
                    <div id="sourTangieInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>


	    <!-- <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="indica">indica</div>
			<div class="new">new</div>
                        <img src= "../images/littleFarmBubbaKush.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Bubba Kush</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Little Farma</h3>
                        <p class="descriptionP">Earthy, sweet taste.
                        Great for pain and stress.
                        </p>
                    </div>
                       <br> 
                    <div id="bubbaKushInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div> -->

	    <!-- <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="indica">indica</div>
			<div class="new">new</div>
                        <img src= "../images/littleFarmLindseyOG.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Lindsay OG</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Little Farma</h3>
                        <p class="descriptionP">Earthy, lemon taste.
                        Great for pain and stress.
                        </p>
                    </div>
                       <br> 
                    <div id="lindsayOGInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div> -->

	  <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
		    <div class="new">new</div>
                        <img src= "../images/kushyChews.png" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Kushy Chews</div><p class="extractsPrice">(edibles)</p>
                    <div class="extractsPrice">
                        $12<span> per</span><br>
                 <br>   <p>Great tasting chews. each gummy is infused with 40mg of thc, great for pain and insomnia.<br> 4 gummies in pack</p><br>
                    </div>
                    <div id="kushyInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>


	  <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="hybrid">hybrid</div>
                        <img src= "../images/popRocks.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Pop Rox</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Phyto Extractions</h3>
                        <p class="descriptionP">citrus, grape, lemon.
                        Great for appitite, stress, and fatique.
                        </p>
                    </div>
                        
                    <div id="popRocksInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

	<div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="hybrid">hybrid</div>
                        <img src= "../images/alienOG.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Alien OG</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Phyto Extractions</h3>
                        <p class="descriptionP">flowery, earthy, lemon.
                        Great for stress, pain, and depression
                        </p>
                    </div>
                        
                    <div id="alienOGInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

        <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="sativa">sativa</div>
                        <img src= "../images/incredibleHulk.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Incredible Hulk</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Phyto Extractions</h3>
                        <p class="descriptionP">citrus, sweet, earthy.
                        Effective for Stress, pain, lack of appetite                        </p>
                    </div>
                        
                    <div id="HulkInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="indica">indica</div>
                        <img src= "../images/godzilla.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Godzilla</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Phyto Extractions</h3>
                        <p class="descriptionP">earthy, pungent, berry taste.
                        Great for inflamation, stress, and pain
                        </p>
                    </div>
                        
                    <div id="godzillaInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="hybrid">hybrid</div>
                        <img src= "../images/cherryPie.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Cherry Pie</div>
                    <div class="extractsPrice">
                        <span>$40 Per </span><br>
                        <h3>Phyto Extractions</h3>
                        <p class="descriptionP">sweet, cherry, earthy.
                        Great for stress, pain, and depression
                        </p>
                    </div>
                        
                    <div id="cherryPieInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            

            
            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">

                    <div class="extractsImageDiv">
                    <div class="indica">indica</div>
                        <img src= "../images/eastcoastChemo.JPG" style="height: 100%">
                    </div>

                    <div class="extractsItemTitle" id="">Chemo</div>
                    <div class="extractsPrice">
                    <span>$40 per<br> 2 for $70</span><br>
                        <h3>East Coast Concentrates</h3>
                        <p class="descriptionP">Best known for it's subtle woody aroma and potent medical effects
                        perfect for nausea, appitite loss, pain, sleeplessness.
                        </p>
                    </div>
                    <div id="chemoInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="sale"><a href="specials.php">sale</a></div>
                        <div class="indica">indica</div>
                        <img src= "../images/atomicPurpleCandy.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Purple Candy</div>
                    <div class="extractsPrice">
                        <span>$40 Per <br>2 for $70</span><br>
                        <h3>Atomic</h3>
                        <p class="descriptionP">Fruity, skunky taste
                        Purged 105hrs
                        Great for nausea, pain, and anxiety
                        </p>
                    </div>
                        
                    <div id="purpleCandyInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="sale"><a href="specials.php">sale</a></div>
                        <div class="indica">indica</div>
                        <img src= "../images/atomicBubbaKush.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Bubba Kush</div>
                    <div class="extractsPrice">
                        <span>$40 Per <br>2 for $70</span><br>
                        <h3>Atomic</h3>
                        <p class="descriptionP">Earthy, skunky taste.
                        Purged for 106hrs<br>
                        Good for depression, increase of appetite
                        </p>
                    </div>
                        
                    <div id="purpleCandyInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">

                    <div class="extractsImageDiv">
                        <img src= "../images/sorcerer.JPG" style="height: 100%">
                    </div>

                    <div class="extractsItemTitle" id="">Og Kush</div>
                    <div class="extractsPrice">
                    <span>$40 per<br> 2 for $70</span><br>
                        <h3>Sorcerer Shatter</h3>
                        <p class="descriptionP">Flowery, Earthy, pungent taste.
                            Good for depression, headaches, and pain. One of the highest THC counts availible at 73%
                        </p>
                    </div>
                    <div id="ogKushInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                    <div class="sale"><a href="specials.php">sale</a></div>
                        <img src= "../images/purpleKushShat.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Purple Kush</div>
                    <div class="extractsPrice">
                        <span>$40 Per <br>2 for $70</span><br>
                        <h3>Sorcerer Shatter</h3>
                        <p class="descriptionP">Skunky, earthy, pungent, taste.
                            Great for insomnia, stress, pain, loss of appetite.
                        </p>
                    </div>
                        
                    <div id="purpleKushInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>
                
        
            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <div class="sale"><a href="specials.php">sale</a></div>
                        <img src= "../images/pinkKushShat.JPG" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Pink Kush</div>
                    <div class="extractsPrice">
                        <span>$40 Per <br>2 for $70</span><br>
                        <h3>Sorcerer Shatter</h3>
                        <p>Skunky, earthy, pungent, taste. Good for pain, stress, and loss of appetite
                        </p>
                    </div>

                    <div id="pinkKushInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <img src= "../images/oilPen.JPG" alt="Oil Pen" style="height:100%">
                            
                    </div>
                    <div class="extractsItemTitle" id="">Phoenix Oil Pen</div>
                    <div class="extractsPrice">
                        $35<span> per</span><br>
                        <p class="penDescription">These pens are different from our shatter pens. They function the same as the shatter pens but are 
                            infused with phoenix oil instead of the shatter. Phoenix oil is high in cbd's as well as thc, and has many medical benefits.
                        </p>
                    </div>
                    <div id="oilPenInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>
                

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <img src= "../images/pen.JPG" alt="Pen" style="height:100%">
                            
                    </div>
                    <div class="extractsItemTitle" id="">Shatter Pen</div>
                    <div class="extractsPrice">
                        $40<span> per</span><br>
                        <p class="penDescription">These pens are made from an OG Kush
                        indica relative. Perfect for when on the go or have to be discreet
                        or even at work. These are pre-loaded and ready
                        to go, just puff and toss in the trash when
                        done. Good for up to 300 puffs. (Depending on many factors such as: length of puffs, storage, temp., etc) No 
                        charging required.
                        </p>
                    </div>
                    <div id="penInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>

            <div class="extractsBox col-lg-6 col-md-6">
                <div class="extractsThumbnail">
                    <div class="extractsImageDiv">
                        <img src= "../images/oilSyringe.jpg" style="height: 100%">
                    </div>
                    <div class="extractsItemTitle" id="">Oil Syringe</div>
                    <div class="extractsPrice">
                        $25<span> per</span><br>
                        <p>Great tasting mild pineapple flavor. Taken orally or can be used for dabs. Great taste and long lasting effects. This extract has many medical benefits such as relief for seizures, pain, lack of appetite and more</p><br>
                    </div>
                    <div id="oilInventory">
                        <div></div>
                    </div>
                    <p class="inventoryPTag">inventory</p>
                </div>
            </div>


            


        

        </div><!--  row -->
    </div><!-- Positioning -->
    
</div><!-- extractsbodyContainer -->


<?php include("footer.php");?>
