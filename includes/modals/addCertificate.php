<div class="modal fade" id="kt_modal_add_certificate" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Form-->
					<form class="form" action="#" id="kt_modal_add_certificate_form">
						<!--begin::Modal header-->
						<div class="modal-header" id="kt_modal_new_address_header">
							<!--begin::Modal title-->
							<h2>Add Certificate</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<i class="ki-duotone ki-cross fs-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body py-10 px-lg-17">
							<!--begin::Scroll-->
							<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
								<!--begin::Notice-->
								<!--begin::Notice-->
								<!-- <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
								
									<i class="ki-duotone ki-information fs-2tx text-warning me-4">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
									
						
									<div class="d-flex flex-stack flex-grow-1">
										
										<div class="fw-semibold">
											<h4 class="text-gray-900 fw-bold">Warning</h4>
											<div class="fs-6 text-gray-700">Updating address may affter to your
											<a href="#">Tax Location</a></div>
										</div>
										
									</div>
								
								</div> -->
								<!--end::Notice-->
								<!--end::Notice-->
                                <div class="fv-row mb-10 fv-plugins-icon-container">
											<!--begin::Label-->
											<label class="d-block fw-semibold fs-6 mb-5">
												<span class="required">Certificate Image</span>
												<span class="ms-1" data-bs-toggle="tooltip" aria-label="E.g. Select a logo to represent the company that's running the campaign." data-bs-original-title="E.g. Select a logo to represent the company that's running the campaign." data-kt-initialized="1">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<!--begin::Image input placeholder-->
											<style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
											<!--end::Image input placeholder-->
											<!--begin::Image input-->
											<div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
												<!--begin::Preview existing avatar-->
												<div class="image-input-wrapper w-125px h-125px"></div>
												<!--end::Preview existing avatar-->
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
													<i class="ki-duotone ki-pencil fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<!--begin::Inputs-->
													<input type="file" name="avatar" accept=".png, .jpg, .jpeg" id="fileInput">
													<input type="hidden" name="avatar_remove">
													<!--end::Inputs-->
												</label>
												<!--end::Label-->
												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<!--end::Hint-->
										<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
							
								<!--begin::Input group-->
								
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Certificate ID</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="certificateID" id="certificateID" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row fv-plugins-icon-container">
										<!--begin::Label-->
										<label class="required fs-5 fw-semibold mb-2">First name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="firstname" id="firstname">
										<!--end::Input-->
									<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row fv-plugins-icon-container">
										<!--end::Label-->
										<label class="required fs-5 fw-semibold mb-2">Last name</label>
										<!--end::Label-->
										<!--end::Input-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="lastname" id="lastname">
										<!--end::Input-->
									<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Institute Name</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="institutename" id="institutename" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="required fs-5 fw-semibold mb-2">Grade</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="" name="grade" id="grade" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-5">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<!--begin::Label-->
											<!-- <label class="fs-5 fw-semibold">Draft</label> -->
											<!--end::Label-->
											<!--begin::Input-->
											<!-- <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div> -->
											<!--end::Input-->
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<!-- <label class="form-check form-switch form-check-custom form-check-solid">
										
											<input class="form-check-input" name="billing" type="checkbox" value="1" checked="checked" />
											
											<span class="form-check-label fw-semibold text-muted">Yes</span>
								
										</label> -->
										<!--end::Switch-->
									</div>
									<!--begin::Wrapper-->
								</div>
								<!--end::Input group-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Modal body-->
						<!--begin::Modal footer-->
						<div class="modal-footer flex-center">
							<!--begin::Button-->
							<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
							<!--end::Button-->
							<!--begin::Button-->
							<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
								<span class="indicator-label">Add</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<!--end::Button-->
						</div>
						<!--end::Modal footer-->
					</form>
					<!--end::Form-->
				</div>
			</div>
		</div>