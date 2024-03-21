<div class="clear"></div>
</div>


<footer id="footer" role="contentinfo">
	<div class="footer-content max-width-wrapper">
		<div class="column col-1">
			<img src="" alt="" width="100px"/>
		</div>
		<div class="column col-2">
			<?php wp_nav_menu( array(  'menu' => 'Footer Menu')  ); ?><br>
			<ul class="socials-wrapper">
				<!-- repeaters -->
				<li>
					<a href="https://okmg.com" target="_blank" rel="noreferrer" class="hvr-float-shadow">Website by OKMG</a>
				</li>
			</ul>
		</div>
		<div class="column col-3">
			<?php 
				//gravity_form( 'Newsletter', false, false, false, '', false );
			?>
		</div>
	</div>
	<div class="copywrite">
		<div>
			copyright © <?php echo date("Y"); ?>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>