<nav>
	<ul id="MenuBar1" class="MenuBarHorizontal">
		<li><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
		<li><a class="MenuBarItemSubmenu">Pelapor</a>
			<ul>
				<li><a href="<?php echo base_url(); ?>Pelapor">Data Pelapor</a></li>
			</ul>
		<li><a class="MenuBarItemSubmenu">Laporan</a>
			<ul>
				<li><a href="<?php echo base_url(); ?>Laporan">Data Laporan</a></li>
			</ul>
	    	</li>
				<li><a class="MenuBarItemSubmenu">Petugas</a>
				<ul>
					<li><a href="<?php echo base_url(); ?>Petugas">Data Petugas</a></li>
				</ul>
				<li><a class="MenuBarItemSubmenu">Status</a>
					<ul>
						<li><a href="<?php echo base_url(); ?>Status">Status</a></li>
					</ul>
					<li><a class="MenuBarItemSubmenu">Log-History</a>
						<ul>
							<li><a href="<?php echo base_url(); ?>Log_History">Data Log-History</a></li>
						</ul>
</nav>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"<?php echo base_url(); ?>assets/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<!-- End Nav -->
