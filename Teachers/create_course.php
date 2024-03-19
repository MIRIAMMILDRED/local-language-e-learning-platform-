<!DOCTYPE html>

<?php require "userinfo.php"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Create New Course</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
    <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="css/vertical-responsive-menu1.min.css" rel="stylesheet">
    <link href="css/instructor-dashboard.css" rel="stylesheet">
    <link href="css/instructor-responsive.css" rel="stylesheet">
    <link href="css/night-mode.css" rel="stylesheet">
    <link href="css/jquery-steps.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">
    <link href="vendor/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">

</head>

<body>
    <!-- Add New Section Start -->
    <div class="modal fade" id="add_section_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lectureModalLabel">New Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-section-block">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="new-section">
                                    <div class="form_group">
                                        <label class="label25">Section Name*</label>
                                        <input class="form_input_1" type="text" placeholder="Section title here">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="main-btn">Add Section</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add New Section End -->
    <!-- Add Lecture Start -->
    <div class="modal fade" id="add_lecture_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lectureModalLabel">Add Lecture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-section-block">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="course-main-tabs">
                                    <div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
                                        <a class="flex-sm-fill text-sm-center nav-link active" data-toggle="tab" href="#nav-basic" role="tab" aria-selected="true"><i class="fas fa-file-alt mr-2"></i>Basic</a>
                                        <a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-video" role="tab" aria-selected="false"><i class="fas fa-video mr-2"></i>Video</a>
                                        <a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-attachment" role="tab" aria-selected="false"><i class="fas fa-paperclip mr-2"></i>Attachments</a>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-basic" role="tabpanel">
                                            <div class="new-section mt-30">
                                                <div class="form_group">
                                                    <label class="label25">Lecture Title*</label>
                                                    <input class="form_input_1" type="text" placeholder="Title here">
                                                </div>
                                            </div>
                                            <div class="ui search focus lbel25 mt-30">
                                                <label>Description*</label>
                                                <div class="ui form swdh30">
                                                    <div class="field">
                                                        <textarea rows="3" name="description" id="" placeholder="description here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="preview-dt">
                                                <span class="title-875">Free Preview</span>
                                                <label class="switch">
                                                    <input type="checkbox" name="preview_op" value="">
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-video" role="tabpanel">
                                            <div class="lecture-video-dt mt-30">
                                                <span class="video-info">Select your preferred video type. (.mp4,
                                                    YouTube, Vimeo etc.)</span>
                                                <div class="video-category">
                                                    <label><input type="radio" name="colorRadio" value="mp4" checked=""><span>HTML5(mp4)</span></label>
                                                    <label><input type="radio" name="colorRadio" value="url"><span>External URL</span></label>
                                                    <label><input type="radio" name="colorRadio" value="youtube"><span>YouTube</span></label>
                                                    <label><input type="radio" name="colorRadio" value="vimeo"><span>Vimeo</span></label>
                                                    <label><input type="radio" name="colorRadio" value="embedded"><span>embedded</span></label>
                                                    <div class="mp4 video-box" style="display: block;">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="upload-file-dt mt-30">
                                                                    <div class="upload-btn">
                                                                        <input class="uploadBtn-main-input" type="file" id="VideoFile__input--source">
                                                                        <label for="VideoFile__input--source" title="Zip">Upload Video</label>
                                                                    </div>
                                                                    <span class="uploadBtn-main-file">File Format:
                                                                        .mp4</span>
                                                                    <span class="uploaded-id">Uploaded ID :
                                                                        <b>12</b></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="upload-file-dt mt-30">
                                                                    <div class="upload-btn">
                                                                        <input class="uploadBtn-main-input" type="file" id="PosterFile__input--source">
                                                                        <label for="PosterFile__input--source" title="Zip">Video Poster</label>
                                                                    </div>
                                                                    <span class="uploadBtn-main-file color-b">Uploaded
                                                                        ID : preview.jpg</span>
                                                                    <span class="uploaded-id color-fmt">Size: 590x300
                                                                        pixels. Supports: jpg,jpeg, or png</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="video-duration">
                                                            <label class="label25">Video Runtime -
                                                                <strong>hh:mm:ss</strong>*</label>
                                                            <div class="duration-time">
                                                                <div class="input-group">
                                                                    <input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
                                                                    <input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
                                                                    <input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="url video-box">
                                                        <div class="new-section">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>External URL*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text" placeholder="External Video URL" name="" id="" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="video-duration">
                                                            <label class="label25">Video Runtime -
                                                                <strong>hh:mm:ss</strong>*</label>
                                                            <div class="duration-time">
                                                                <div class="input-group">
                                                                    <input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
                                                                    <input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
                                                                    <input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="youtube video-box">
                                                        <div class="new-section">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Youtube URL*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text" placeholder="Youtube Video URL" name="" id="" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="video-duration">
                                                            <label class="label25">Video Runtime -
                                                                <strong>hh:mm:ss</strong>*</label>
                                                            <div class="duration-time">
                                                                <div class="input-group">
                                                                    <input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
                                                                    <input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
                                                                    <input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vimeo video-box">
                                                        <div class="new-section">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Vimeo URL*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text" placeholder="Vimeo Video URL" name="" id="" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="video-duration">
                                                            <label class="label25">Video Runtime -
                                                                <strong>hh:mm:ss</strong>*</label>
                                                            <div class="duration-time">
                                                                <div class="input-group">
                                                                    <input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
                                                                    <input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
                                                                    <input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="embedded video-box">
                                                        <div class="new-section">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Embedded Code*</label>
                                                                <div class="ui form swdh30">
                                                                    <div class="field">
                                                                        <textarea rows="3" name="" id="" placeholder="Place your embedded code here"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="video-duration">
                                                            <label class="label25">Video Runtime -
                                                                <strong>hh:mm:ss</strong>*</label>
                                                            <div class="duration-time">
                                                                <div class="input-group">
                                                                    <input type="text" class="form_input_1" name="video[runtime][hours]" value="00">
                                                                    <input type="text" class="form_input_1" name="video[runtime][mins]" value="1">
                                                                    <input type="text" class="form_input_1" name="video[runtime][secs]" value="00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-attachment" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="upload-file-dt mt-30">
                                                        <div class="upload-btn">
                                                            <input class="uploadBtn-main-input" type="file" id="SourceFile__input--source">
                                                            <label for="SourceFile__input--source" title="Zip"><i class="far fa-plus-square mr-2"></i>Attachment</label>
                                                        </div>
                                                        <span class="uploadBtn-main-file">Supports: jpg, jpeg, png, pdf
                                                            or .zip</span>
                                                        <div class="add-attachments-dt">
                                                            <div class="attachment-items">
                                                                <div class="attachment_id">Uploaded ID: 12</div>
                                                                <button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
                                                            </div>
                                                            <div class="attachment-items">
                                                                <div class="attachment_id">Uploaded ID: 13</div>
                                                                <button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
                                                            </div>
                                                            <div class="attachment-items">
                                                                <div class="attachment_id">Uploaded ID: 14</div>
                                                                <button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="main-btn">Add Lecture</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Lecture End -->
    <!-- Add Quiz Start -->
    <div class="modal fade" id="add_quiz_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lectureModalLabel">Add Quiz</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-section-block">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="course-main-tabs">
                                    <div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
                                        <a class="flex-sm-fill text-sm-center nav-link active" data-toggle="tab" href="#nav-quizbasic" role="tab" aria-selected="true"><i class="fas fa-file-alt mr-2"></i>Basic</a>
                                        <a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-questions" role="tab" aria-selected="false"><i class="fas fa-question-circle mr-2"></i>Questions</a>
                                        <a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab" href="#nav-setting" role="tab" aria-selected="false"><i class="fas fa-cog mr-2"></i>Setting</a>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-quizbasic" role="tabpanel">
                                            <div class="new-section">
                                                <div class="form_group mt-30">
                                                    <label class="label25">Quiz Title*</label>
                                                    <input class="form_input_1" type="text" placeholder="Title here">
                                                </div>
                                            </div>
                                            <div class="ui search focus lbel25 mt-30">
                                                <label>Description*</label>
                                                <div class="ui form swdh30">
                                                    <div class="field">
                                                        <textarea rows="3" name="description" id="" placeholder="description here..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-questions" role="tabpanel">
                                            <div class="lecture-video-dt mt-30">
                                                <div class="add-ques-dt">
                                                    <button type="button" class="main-btn color btn-hover w-100" data-toggle="collapse" data-target="#add-ques"><i class="far fa-plus-square mr-2"></i>Add Question</button>
                                                    <div id="add-ques" class="collapse">
                                                        <div class="lecture-video-dt mt-30">
                                                            <span class="video-info">Question Type</span>
                                                            <div class="video-category">
                                                                <label><input type="radio" name="colorRadio" value="schoice"><span><i class="far fa-dot-circle mr-2"></i>Single
                                                                        Choice</span></label>
                                                                <label><input type="radio" name="colorRadio" value="mchoice"><span><i class="far fa-check-circle mr-2"></i>Multiple
                                                                        Choice</span></label>
                                                                <label><input type="radio" name="colorRadio" value="sline"><span><i class="far fa-edit mr-2"></i>Single Line
                                                                        Text</span></label>
                                                                <label><input type="radio" name="colorRadio" value="mline"><span><i class="far fa-file-alt mr-2"></i>Milti Line
                                                                        Text</span></label>
                                                                <div class="schoice quiz-box">
                                                                    <div class="ques-box">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Image*</label>
                                                                                    <div class="upload-thumb">
                                                                                        <input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source">
                                                                                        <label class="mx-0 my-0" for="thumbnail_source" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7 col-md-9">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Question
                                                                                        Title*</label>
                                                                                    <input class="form_input_1" type="text" placeholder="Write question title">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-12">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Score*</label>
                                                                                    <input class="form_input_1" type="number" placeholder="Score">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ans-box">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <button class="main-btn color btn-hover mt-30">Add
                                                                                    Option</button>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="option-item">
                                                                                    <div class="opt-title">
                                                                                        <h4>1. Option</h4>
                                                                                        <span class="opt-del"><i class="fas fa-trash-alt"></i></span>
                                                                                    </div>
                                                                                    <div class="option-wrap">
                                                                                        <div class="form_group">
                                                                                            <label class="label25 text-left">Option
                                                                                                Title*</label>
                                                                                            <input class="form_input_1" type="text" placeholder="Option title">
                                                                                        </div>
                                                                                        <div class="agree_checkbox">
                                                                                            <input type="checkbox" id="check1">
                                                                                            <label for="check1">Correct
                                                                                                answer</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mchoice quiz-box">
                                                                    <div class="ques-box">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Image*</label>
                                                                                    <div class="upload-thumb">
                                                                                        <input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source1">
                                                                                        <label class="mx-0 my-0" for="thumbnail_source1" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7 col-md-9">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Question
                                                                                        Title*</label>
                                                                                    <input class="form_input_1" type="text" placeholder="Write question title">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-12">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Score*</label>
                                                                                    <input class="form_input_1" type="number" placeholder="Score">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ans-box">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <button class="main-btn color btn-hover mt-30">Add
                                                                                    Option</button>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12">
                                                                                <div class="option-item">
                                                                                    <div class="opt-title">
                                                                                        <h4>1. Option</h4>
                                                                                        <span class="opt-del"><i class="fas fa-trash-alt"></i></span>
                                                                                    </div>
                                                                                    <div class="option-wrap">
                                                                                        <div class="form_group">
                                                                                            <label class="label25 text-left">Option
                                                                                                Title*</label>
                                                                                            <input class="form_input_1" type="text" placeholder="Option title">
                                                                                        </div>
                                                                                        <div class="agree_checkbox">
                                                                                            <input type="checkbox" id="check2">
                                                                                            <label for="check2">Correct
                                                                                                answer</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sline quiz-box">
                                                                    <div class="ques-box">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Image*</label>
                                                                                    <div class="upload-thumb">
                                                                                        <input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source2">
                                                                                        <label class="mx-0 my-0" for="thumbnail_source2" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7 col-md-9">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Question
                                                                                        Title*</label>
                                                                                    <input class="form_input_1" type="text" placeholder="Write question title">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-12">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Score*</label>
                                                                                    <input class="form_input_1" type="number" placeholder="Score">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mline quiz-box">
                                                                    <div class="ques-box">
                                                                        <div class="row">
                                                                            <div class="col-lg-2 col-md-2">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Image*</label>
                                                                                    <div class="upload-thumb">
                                                                                        <input class="uploadBtn-input-preview" type="file" accept="image/png" id="thumbnail_source3">
                                                                                        <label class="mx-0 my-0" for="thumbnail_source3" title="Image"><img class="img-thumbnail" src="images/placeholder-image.png" alt=""></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-7 col-md-9">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Question
                                                                                        Title*</label>
                                                                                    <input class="form_input_1" type="text" placeholder="Write question title">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-3 col-md-12">
                                                                                <div class="form_group mt-30">
                                                                                    <label class="label25 text-left">Score*</label>
                                                                                    <input class="form_input_1" type="number" placeholder="Score">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="share-submit-btns pl-0 pb-0">
                                                            <button class="main-btn color btn-hover"><i class="fas fa-save mr-2"></i>Save Question</button>
                                                        </div>
                                                    </div>
                                                    <div class="added-ques">
                                                        <div class="section-group-list pl-0 pr-0 sortable">
                                                            <div class="section-list-item">
                                                                <div class="section-item-title">
                                                                    <i class="far fa-dot-circle mr-2"></i>
                                                                    <span class="section-item-title-text">Question
                                                                        Title</span>
                                                                </div>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
                                                                <button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
                                                            </div>
                                                            <div class="section-list-item">
                                                                <div class="section-item-title">
                                                                    <i class="far fa-check-circle mr-2"></i>
                                                                    <span class="section-item-title-text">Question
                                                                        Title</span>
                                                                </div>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
                                                                <button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
                                                            </div>
                                                            <div class="section-list-item">
                                                                <div class="section-item-title">
                                                                    <i class="far fa-edit mr-2"></i>
                                                                    <span class="section-item-title-text">Question
                                                                        Title</span>
                                                                </div>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
                                                                <button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
                                                            </div>
                                                            <div class="section-list-item">
                                                                <div class="section-item-title">
                                                                    <i class="far fa-file-alt mr-2"></i>
                                                                    <span class="section-item-title-text">Question
                                                                        Title</span>
                                                                </div>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-edit"></i></button>
                                                                <button type="button" class="section-item-tools"><i class="fas fa-trash-alt"></i></button>
                                                                <button type="button" class="section-item-tools ml-auto"><i class="fas fa-bars"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-setting" role="tabpanel">
                                            <div class="new-section mt-30">
                                                <div class="quiz-cogs-step">
                                                    <label class="label25 quiz-st-ft text-left">Gradable</label>
                                                    <div class="cogs-toggle">
                                                        <label class="switch">
                                                            <input type="checkbox" id="gradable_quiz" value="">
                                                            <span></span>
                                                        </label>
                                                        <label for="gradable_quiz" class="lbl-quiz">Quiz
                                                            Gradable</label>
                                                    </div>
                                                    <p>If this quiz test affect on the students grading system for this
                                                        course.</p>
                                                </div>
                                                <div class="quiz-cogs-step mt-30">
                                                    <label class="label25 quiz-st-ft text-left">Remaining time
                                                        display</label>
                                                    <div class="cogs-toggle">
                                                        <label class="switch">
                                                            <input type="checkbox" id="show_time" value="">
                                                            <span></span>
                                                        </label>
                                                        <label for="show_time" class="lbl-quiz">Show Time</label>
                                                    </div>
                                                    <p>By enabling this option, quiz taker will show remaining time
                                                        during attempt.</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form_group mt-30">
                                                            <label class="label25">Time Limit*</label>
                                                            <div class="input-group">
                                                                <input class="form_input_1 white-bg" type="number" placeholder="">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text int4856">Minutes</span>
                                                                </div>
                                                                <span class="alt-text">Set zero to disable time
                                                                    limit.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form_group mt-30">
                                                            <label class="label25">Passing Score(%)*</label>
                                                            <input class="form_input_1" type="number" placeholder="">
                                                            <span class="alt-text">Student have to collect this score in
                                                                percent for the pass this quiz.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form_group mt-30">
                                                            <label class="label25">Questions Limit*</label>
                                                            <input class="form_input_1" type="number" placeholder="">
                                                            <span class="alt-text">The number of questions student have
                                                                to answer in this quiz.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="main-btn">Add Quiz</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Quiz End -->
    <!-- Add Assignment Start -->
    <div class="modal fade" id="add_assignment_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lectureModalLabel">Add Assignment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="new-section-block main-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="new-section">
                                    <div class="form_group">
                                        <label class="label25">Assignment Title*</label>
                                        <input class="form_input_1" type="text" placeholder="Assignment title here">
                                    </div>
                                    <div class="form_group mt-30">
                                        <label class="label25">Description*</label>
                                        <div class="text-editor">
                                            <div id="editor4"></div>
                                        </div>
                                    </div>
                                    <div class="form_group mt-30">
                                        <div class="row g-4">
                                            <div class="col-lg-4 mt-30">
                                                <label class="label25">Time Duration*</label>
                                                <div class="row no-gutters">
                                                    <div class="col-6">
                                                        <input class="form_input_1" type="number" value="0" placeholder="">
                                                    </div>
                                                    <div class="col-6 pl-2">
                                                        <select class="ui hj145 dropdown cntry152 assignment prompt srch_explore">
                                                            <option value="">Select</option>
                                                            <option>Weeks</option>
                                                            <option>Days</option>
                                                            <option>Hours</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <span class="alt-text">Assignment time duration, set 0 for no
                                                    limit.</span>
                                            </div>
                                            <div class="col-lg-4 mt-30">
                                                <label class="label25">Total Number*</label>
                                                <input class="form_input_1" type="number" value="10" placeholder="">
                                                <span class="alt-text">Maximum points a student can score</span>
                                            </div>
                                            <div class="col-lg-4 mt-30">
                                                <label class="label25">Minimum Pass Number*</label>
                                                <input class="form_input_1" type="number" value="5" placeholder="">
                                                <span class="alt-text">Minimum points required for the student to pass
                                                    this assignment.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="assgn152 mt-30 pt-30">
                                        <div class="row g-6">
                                            <div class="col-lg-6 mt-30">
                                                <label class="label25">Upload attachment limit*</label>
                                                <input class="form_input_1" type="text" value="1" placeholder="">
                                                <span class="alt-text">Maximum attachment size limit</span>
                                            </div>
                                            <div class="col-lg-6 mt-30">
                                                <label class="label25">Maximum attachment size limit</label>
                                                <input class="form_input_1" type="text" value="10" placeholder="">
                                                <span class="alt-text">Define maximum attachment size in MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upload-file-dt mt-30">
                                        <div class="upload-btn">
                                            <input class="uploadBtn-main-input" type="file" id="AssignmentFile__input--source">
                                            <label for="AssignmentFile__input--source" title="Zip"><i class="far fa-plus-square mr-2"></i>Attachment</label>
                                        </div>
                                        <span class="uploadBtn-main-file">Supports: jpg, jpeg, png, pdf or .zip</span>
                                        <div class="add-attachments-dt">
                                            <div class="attachment-items">
                                                <div class="attachment_id">Uploaded ID: 5</div>
                                                <button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                            <div class="attachment-items">
                                                <div class="attachment_id">Uploaded ID: 6</div>
                                                <button class="cancel-btn" type="button"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="main-btn">Add Assignment</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Assignment End -->
    <!-- Header Start -->
    <?php include("header.php"); ?>
    <!-- Header End -->
    <!-- Left Sidebar Start -->
    <?php include("menu.php"); ?>
    <!-- Left Sidebar End -->
    <!-- Body Start -->
    <div class="wrapper">
        <div class="sa4d25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-analysis"></i> Create New Course</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="create_course_handler.php" method="post">
                            <div class="course__form">
                                <div class="general_info10">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="ui search focus mt-30 lbel25">
                                                <label>Course Title*</label>
                                                <div class="ui left icon input swdh19">
                                                    <input class="prompt srch_explore" type="text" placeholder="Course title here" name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">
                                                    <div class="badge_num">60</div>
                                                </div>
                                                <div class="help-block">(Please make this a maximum of 100 characters
                                                    and unique.)</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="ui search focus lbel25 mt-30">
                                                <label>Short Description*</label>
                                                <div class="ui form swdh30">
                                                    <div class="field">
                                                        <textarea rows="3" name="description" id="" placeholder="Item description here..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="help-block">220 words</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="course_des_textarea mt-30 lbel25">
                                                <label>Course Description*</label>
                                                <div class="course_des_bg">
                                                    <ul class="course_des_ttle">
                                                        <li><a href="#"><i class="uil uil-bold"></i></a></li>
                                                        <li><a href="#"><i class="uil uil-italic"></i></a></li>
                                                        <li><a href="#"><i class="uil uil-list-ul"></i></a></li>
                                                        <li><a href="#"><i class="uil uil-left-to-right-text-direction"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="uil uil-right-to-left-text-direction"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="uil uil-list-ui-alt"></i></a></li>
                                                        <li><a href="#"><i class="uil uil-link"></i></a></li>
                                                        <li><a href="#"><i class="uil uil-text-size"></i></a></li>
                                                        <li><a href="#"><i class="uil uil-text"></i></a></li>
                                                    </ul>
                                                    <div class="textarea_dt">
                                                        <div class="ui form swdh339">
                                                            <div class="field">
                                                                <textarea rows="5" name="long_description" id="id_course_description" placeholder="Insert your course description"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="ui search focus lbel25 mt-30">
                                                <label>What will students learn in your course?*</label>
                                                <div class="ui form swdh30">
                                                    <div class="field">
                                                        <textarea rows="3" name="points" id="" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="help-block">Student will gain this skills, knowledge after
                                                    completing this course. (One per line).</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="ui search focus lbel25 mt-30">
                                                <label>Requirements*</label>
                                                <div class="ui form swdh30">
                                                    <div class="field">
                                                        <textarea rows="3" name="requirements" id="" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="help-block">What knowledge, technology, tools required by
                                                    users to start this course. (One per line).</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mt-30 lbel25">
                                                <label>Course Level*</label>
                                            </div>
                                            <select class="ui hj145 dropdown cntry152 prompt srch_explore" multiple="" name="level">
                                                <option value="">Select Class</option>
                                                <option value="1">Class 1</option>
                                                <option value="2">Class 2</option>
                                                <option value="3">Class 3</option>
                                                <option value="4">Class 4</option>
                                                <option value="5">Class 5</option>
                                                <option value="6">Class 6</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mt-30 lbel25">
                                                <label>Audio Language*</label>
                                            </div>
                                            <select class="ui hj145 dropdown cntry152 prompt srch_explore" multiple="" name="language">
                                                <option value="">Select Audio</option>
                                                <option>Kisii</option>
                                                <option>Luo</option>
                                                <option>Kalenjin</option>
                                                <option>Giriama</option>
                                                <option>Teso</option>
                                                <option>Luhya</option>
                                                <option>Kamba</option>
                                                <option>Taita</option>
                                                <option>Bukusu</option>
                                                <option>Kiswahili</option>
                                                <option>Kikuyu</option>
                                                <option>Mijikenda</option>
                                                
                                            </select>
                                        </div>
                                     
                                    

                                        <div class="col-lg-12 col-md-12">
                                            <div class="ui search focus mt-30 lbel25">
                                                <div class="ui left icon input swdh19">

                                                    <div class="step-footer step-tab-pager">
                                                        <button type="submit" data-direction="prev" class="btn btn-default steps_btn">
                                                            SUBMIT
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>

    </div>
    </div>

    <!--footer start-->
    <?php include("footer.php"); ?>
    <!--end footer -->
    </div>
    <!-- Body End -->

    <script src="js/vertical-responsive-menu.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/semantic/semantic.min.js"></script>
    <script src="vendor/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/night-mode.js"></script>
    <script src="js/jquery-steps.min.js"></script>
    <script>
        $('#add-course-tab').steps({
            onFinish: function() {
                alert('Wizard Completed');
            }
        });
    </script>
    <script>
        $(function() {
            $(".sortable").sortable();
            $(".sortable").disableSelection();
        });
    </script>

</body>

</html>