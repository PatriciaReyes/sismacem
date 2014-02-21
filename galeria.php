    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php include("header.php"); ?>

<body>

<?php include("subheader.php"); ?>

<div id="contentbg">
  <div id="contentblank">
    <div id="content">



      <?php include("contentleft.php");?>



      <div id="contentmid">

        <!-- CONTENIDO DE LA PAGINA AQUI -->


        <div class="midheading">
             <h2>Galeria de Fotos</h2>
        </div>
        <div class="midtxt">
        <fieldset><legend><b></b></legend>
        <!--img src="images/capacitacion.jpg" alt=""-->
        <script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: true
				});
			}
			window.addEvent('domready',startGallery);
		</script>
			<div class="content">
			<div id="myGallery">
				<div class="imageElement">
					<h3>Item 1 Title</h3>
					<p>Item 1 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/1.jpg" class="full" />
					<img src="images/brugges2006/1-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 2 Title</h3>
					<p>Item 2 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/2.jpg" class="full" />
					<img src="images/brugges2006/2-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 3 Title</h3>
					<p>Item 3 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/3.jpg" class="full" />
					<img src="images/brugges2006/3-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 4 Title</h3>
					<p>Item 4 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/4.jpg" class="full" />
					<img src="images/brugges2006/4-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 5 Title</h3>
					<p>Item 5 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/5.jpg" class="full" />
					<img src="images/brugges2006/5-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 6 Title</h3>
					<p>Item 6 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/6.jpg" class="full" />
					<img src="images/brugges2006/6-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 7 Title</h3>
					<p>Item 7 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/7.jpg" class="full" />
					<img src="images/brugges2006/7-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3>Item 8 Title</h3>
					<p>Item 8 Description</p>
					<a href="#" title="open image" class="open"></a>
					<img src="images/brugges2006/8.jpg" class="full" />
					<img src="images/brugges2006/8-mini.jpg" class="thumbnail" />
				</div>
			</div>
		</div>
        </fieldset>
        </div>
        <div id="projectbg3"></div>

		<!-- CONTENIDO DE LA PAGINA HASTA AQUI -->
		</div>

      <?php include("contentright.php");?>
  </div>

</div>

    </div>

  </div>

</div>

<?php include("footer.php");?>
</body>
</html>
