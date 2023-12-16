<div>
    <main>
        <section class="pt-md-8 pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-md-0">
                        <div class="border p-4 upload_prescription">
                            <form method="post" enctype="multipart/form-data" class="ng-pristine ng-valid">
                                <div class="form-group">
                                    <label><strong>Upload Prescription</strong></label>
                                    <p class="mb-3"><small>Please attach a prescription to proceed</small></p>
                                    <div class="custom-file">
                                        <input type="text" name="files[]" multiple=""
                                            class="custom-file-input form-control" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" name="upload" value="upload" id="upload"
                                        class="btn btn-block btn-primary">Continue <i
                                            class="fa fa-fw fa-caret-right"></i>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="bg-light py-4 px-md-5 px-3">
                            <h4 class="mb-3">Valid Prescription Guide</h4>
                            <div class="row">
                                <div class="valid-prescription-list col-lg-7">
                                    <ul class="pl-4">
                                        <li class="mb-2">Don’t crop out any part of the image.</li>
                                        <li class="mb-2">Avoid blurred images.</li>
                                        <li class="mb-2">Include details of doctor and patient + clinic visit date.</li>
                                        <li class="mb-2">Medicines will be dispensed as per prescription.</li>
                                        <li class="mb-2">Supported file types: jpeg, jpg, png.</li>
                                        <li class="mb-2">Maximum allowed file size: 2MB</li>
                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <img class="img-fluid" src="{{asset('assets/img/extra/prescription.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
