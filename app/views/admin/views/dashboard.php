<div class="text-center">
	<md-toolbar class="md-whiteframe-6">
		<div class="md-toolbar-tools " md-whiteframe="6" style="background-color:#E0E0E0">
			<h3>
				<h2 style="font-weight:400;margin-left:5px;color:black">Dashboard</h2>
			</h3>
		</div>
	</md-toolbar>
	<div layout="column" style="width:100%;margin-left:0px;align-items:center" layout-align="center center" class="md-padding">
		<div layout="row">
			<div layout="column" style="width:950px">
				<div layout="row">
					<md-card style="width:50%;height:200px" layout="row">
						<div style="width:4px;height:200px;background-color:#F9A825"></div>
						<div class="md-padding" layout="column">
							<md-title>Cashier Details</md-title>
							<div style="background-color:#F9A825;height:4px;width:40px;margin-top:5px;margin-bottom:5px"></div>

							<div style="margin-left:20px" layout="column">
								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Name}}' -->
									<md-title id="cashierName" class="md-padding" style="margin-top:-10px;margin-left:-10px">Gene Rodriguez</md-title>
								</div>

								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Email}}' -->
									<md-title id="cashierEmail" class="md-padding" style="margin-top:-15px;;margin-left:-10px">genedvlpr@gmail.com</md-title>
								</div>
								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M20,0H4V2H20V0M4,24H20V22H4V24M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M12,6.75A2.25,2.25 0 0,1 14.25,9A2.25,2.25 0 0,1 12,11.25A2.25,2.25 0 0,1 9.75,9A2.25,2.25 0 0,1 12,6.75M17,17H7V15.5C7,13.83 10.33,13 12,13C13.67,13 17,13.83 17,15.5V17Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Contact}}' -->
									<md-title id="cashierContactNo" class="md-padding" style="margin-top:-15px;;margin-left:-10px">0926 708 4273</md-title>
								</div>
								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Gender}}' -->
									<md-title id="cashierGender" class="md-padding" style="margin-top:-15px;margin-left:-10px">Silang, Cavite</md-title>
								</div>
							</div>
						</div>

					</md-card>
					<md-card style="width:50%;height:200px" layout="row">
						<div style="width:4px;height:200px;background-color:#F9A825"></div>
						<div class="md-padding" layout="column">
							<md-title>Branch Details</md-title>
							<div style="background-color:#F9A825;height:4px;width:40px;margin-top:5px;margin-bottom:5px"></div>

							<div style="margin-left:20px" layout="column">
								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M15,14C12.33,14 7,15.33 7,18V20H23V18C23,15.33 17.67,14 15,14M15,12A4,4 0 0,0 19,8A4,4 0 0,0 15,4A4,4 0 0,0 11,8A4,4 0 0,0 15,12M5,13.28L7.45,14.77L6.8,11.96L9,10.08L6.11,9.83L5,7.19L3.87,9.83L1,10.08L3.18,11.96L2.5,14.77L5,13.28Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Name}}' -->
									<md-title id="cashierName" class="md-padding" style="margin-top:-10px;margin-left:-10px">Faye Pacrin</md-title>
								</div>

								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Email}}' -->
									<md-title id="cashierEmail" class="md-padding" style="margin-top:-15px;;margin-left:-10px">046 991 9999</md-title>
								</div>
								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M2.53,19.65L3.87,20.21V11.18L1.44,17.04C1.03,18.06 1.5,19.23 2.53,19.65M22.03,15.95L17.07,4C16.76,3.23 16.03,2.77 15.26,2.75C15,2.75 14.73,2.79 14.47,2.9L7.1,5.95C6.35,6.26 5.89,7 5.87,7.75C5.86,8 5.91,8.29 6,8.55L11,20.5C11.29,21.28 12.03,21.74 12.81,21.75C13.07,21.75 13.33,21.7 13.58,21.6L20.94,18.55C21.96,18.13 22.45,16.96 22.03,15.95M7.88,8.75A1,1 0 0,1 6.88,7.75A1,1 0 0,1 7.88,6.75C8.43,6.75 8.88,7.2 8.88,7.75C8.88,8.3 8.43,8.75 7.88,8.75M5.88,19.75A2,2 0 0,0 7.88,21.75H9.33L5.88,13.41V19.75Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Contact}}' -->
									<md-title id="cashierContactNo" class="md-padding" style="margin-top:-15px;;margin-left:-10px">MMB-0010-1124</md-title>
								</div>
								<div style="margin-top:10px">
									<md-icon>
										<svg style="width:24px;height:24px" viewBox="0 0 24 24">
											<path fill="#F9A825" d="M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,12.5A1.5,1.5 0 0,1 10.5,11A1.5,1.5 0 0,1 12,9.5A1.5,1.5 0 0,1 13.5,11A1.5,1.5 0 0,1 12,12.5M12,7.2C9.9,7.2 8.2,8.9 8.2,11C8.2,14 12,17.5 12,17.5C12,17.5 15.8,14 15.8,11C15.8,8.9 14.1,7.2 12,7.2Z"
											/>
										</svg>
									</md-icon>
									<!-- This is a sample output, code must be '{{cashier.Gender}}' -->
									<md-title id="cashierGender" class="md-padding" style="margin-top:-15px;margin-left:-10px">Silang, Cavite</md-title>
								</div>
							</div>
						</div>

					</md-card>
				</div>
				<div layout="row">
					<md-card style="width:100%" layout="row">
						<div style="width:150px;;background-color:#F9A825">
							<div style="color:#ffffff;text-align:center" class="md-padding">
								Account ID
							</div>
						</div>

						<md-icon style="margin-left:20px;margin-right:100px">
							<svg style="width:24px;height:24px" viewBox="0 0 24 24">
								<path fill="#F9A825" d="M2,3H22C23.05,3 24,3.95 24,5V19C24,20.05 23.05,21 22,21H2C0.95,21 0,20.05 0,19V5C0,3.95 0.95,3 2,3M14,6V7H22V6H14M14,8V9H21.5L22,9V8H14M14,10V11H21V10H14M8,13.91C6,13.91 2,15 2,17V18H14V17C14,15 10,13.91 8,13.91M8,6A3,3 0 0,0 5,9A3,3 0 0,0 8,12A3,3 0 0,0 11,9A3,3 0 0,0 8,6Z"
								/>
							</svg>
						</md-icon>
						<md-title class="md-padding" style="margin-left:-100px">cashier-0102234-01</md-title>
				</div>
				<div layout="row">
					<md-card style="width:100%;height:200px" layout="row">
						<div style="width:4px;;background-color:#F9A825"></div>
						<div layout="column" style="width:100%">
							<div class="md-padding">
								<md-title>Orders</md-title>
								<div style="background-color:#F9A825;height:4px;width:40px;margin-top:5px;margin-bottom:5px"></div>
							</div>
							<div layout="column">
								<md-list style="margin-top:-20px">
									<md-list-item ng-click="null">
										<div style="max-height:40px" layout="row">
											<md-icon style="margin-left:80px">
												<svg style="width:24px;height:24px" viewBox="0 0 24 24">
													<path fill="#F9A825" d="M12,16L19.36,10.27L21,9L12,2L3,9L4.63,10.27M12,18.54L4.62,12.81L3,14.07L12,21.07L21,14.07L19.37,12.8L12,18.54Z"
													/>
												</svg>
											</md-icon>
											<h4 style="font-weight:400;margin:0px;margin-left:50px" layout-align="center center">Item Id</h4>
											<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Item Name</h4>
											<h4 style="font-weight:400;margin:0px;margin-left:100px" layout-align="center center">Quantity</h4>
										</div>
									</md-list-item>
									<md-divider></md-divider>
								</md-list>
							</div>
						</div>
					</md-card>
				</div>
			</div>
			<div layout="column" style="width:40%">
				<div layout="column">
					<md-card style="width:95%;height:267px" layout="row">
						<div style="width:4px;;background-color:#F9A825"></div>
						<div layout="column" style="width:100%">
							<div class="md-padding">
								<md-title>Orders</md-title>
								<div style="background-color:#F9A825;height:4px;width:40px;margin-top:5px;margin-bottom:5px"></div>
							</div>
							<div layout="column">
								<md-list style="margin-top:-20px">
									<md-list-item ng-click="null">
										<div style="max-height:40px" layout="row">
											<md-icon style="margin-top:12px;margin-left:10px">
												<svg style="width:10px;height:10px" viewBox="0 0 24 24">
													<path fill="#00C853" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
												</svg>
											</md-icon>

											<h4 style="font-weight:400;margin:0px" layout-align="center center">Customer Name</h4>
										</div>
									</md-list-item>
									<md-divider></md-divider>
								</md-list>
							</div>
						</div>
					</md-card>
					<md-card style="width:95%;height:200px" layout="row">
						<div style="width:4px;;background-color:#F9A825"></div>
						<div layout="column" style="width:100%">
							<div class="md-padding">
								<md-title>Delivered</md-title>
								<div style="background-color:#F9A825;height:4px;width:40px;margin-top:5px;margin-bottom:5px"></div>
							</div>
							<div layout="column">
								<md-list style="margin-top:-20px">
									<md-list-item ng-click="null">
										<div style="max-height:40px" layout="row">
											<md-icon style="margin-right:10px">
													<svg style="width:24px;height:24px" viewBox="0 0 24 24">
															<path fill="#00C853" d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z" />
														</svg>
											</md-icon>

											<h4 style="font-weight:400;margin:0px" layout-align="center center">Customer Name</h4>
										</div>
									</md-list-item>
									<md-divider></md-divider>
								</md-list>
							</div>
						</div>
					</md-card>
				</div>
			</div>
		</div>
	</div>
</div>