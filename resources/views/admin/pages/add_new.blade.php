@extends('admin.layouts.admin')

@section('content')
			<!-- start page content wrapper-->
			<div class="page-content-wrapper">
				<!-- start page content-->
				<div class="page-content">
					<!--start breadcrumb-->
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">Add New Page</div>
						<div class="ms-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-outline-dark">Settings</button>
								<button type="button" class="btn btn-outline-dark split-bg-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span></button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
									<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->

					<hr />

					<div class="card">
						<div class="card-body">
							
							<div class="row">
                                <div class="col-md-9">
                                    <div class="postbody">
                                        <div class="mb-3">
                                            <input class="form-control mb-2" type="text" placeholder="Add Title" aria-label="add title" />
                                            <p class="d-inline">Permalink:</p>
                                            <a href="#" class="d-inline">flid.org/pagetitle</a>
                                        </div>
                                        <a href="/rd/posts/add-new.php" class="btn btn-sm btn-outline-secondary mb-2"><i class="bi bi-images"></i> Add Media</a>
                                        <div id="div_editor1"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="postbox mb-3">
                                        <div class="postbox-header">
                                            <h2>Publish</h2>
                                        </div>
                                        <div class="postbox-body">
                                            <a href="#" class="btn btn-sm btn-outline-secondary mb-3">Save Draft</a>
                                            <a href="#" class="btn btn-sm btn-outline-secondary mb-3" style="float: right;">Preview</a>
                                            <div class="misc-pub-section mb-3"><i class="bi bi-bookmark-star"></i> Status: <span id="post-status-display"> Draft </span></div>
                                            <div class="misc-pub-section mb-3">
                                                <i class="bi bi-calendar-day"></i> Date: <span id="post-status-display"> <?php echo date("d-m-Y"); ?></span>
                                            </div>
                                            <div id="time" class="misc-pub-section mb-3">
                                                <i class="bi bi-clock-history"></i> Time: <span id="post-status-display"> <?php $time = date("g:i:s a"); echo $time; ?> </span>
                                            </div>
                                        </div>
                                        <div class="postbox-footer">
                                            <a href="#" class="d-inline btn btn-sm btn-outline-secondary">Move to Trash</a>
                                            <a href="#" class="d-inline btn btn-sm btn-outline-secondary">Publish</a>
                                        </div>
                                    </div>
                            
                                    <div class="postbox mb-5">
                                        <div class="postbox-header">
                                            <h2>Featured image</h2>
                                        </div>
                                        <div class="postbox-body">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#imageModal">
                                            Set featured image
                                            </button>
                                            <img id="blah"  />
                                            <input type='file' onchange="readURL(this);" style="margin-top: 10px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>

						</div>
					</div>
					<!--end card-->
				</div>
				<!-- end page content-->
			</div>
			<!--end page content wrapper-->


@endsection