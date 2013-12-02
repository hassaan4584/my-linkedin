<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>StyleSheet1.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>result.css"/>

<body class="body">

	<body class="body">

		<div class="text_body">

			<div class="wrapper-result">

				<div id="top-card">
					<div class="top-card profile-top-card">
						<img class="profile-picture" src="<?php echo base_url();?>uploads/<?php echo $result['profilePic'];?>" width="200" height="200">

						<div class="basicInfo">
							<h1><?php echo $result['userFirstName'].' '.$result['userLastName'] ?></h1>
							<p><?php echo $result['userProfession'] ?> </p>
						</div>

					</div>
				</div>

			</div>
		</div>


</body>



