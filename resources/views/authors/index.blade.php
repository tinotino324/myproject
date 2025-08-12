@extends('layouts.app')

@section('title', 'Authors')

@push('styles')

@endpush

@section('content')
<div class="box-inner">
    <div class="box-header">
        <div class="headerTitleWrapper d-flex align-items-end justify-content-between w-100">
        <div class="box-header d-flex align-items-center justify-content-start">                
            <a href="<?= ('index') ?>" class="me-2 backBtn" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"></path>
                </svg> 
            </a>        
            <h3 class="box-title mb-0">Authors</h3>
        </div>  
            <div class="d-flex align-items-center gap-3 site-card-bg px-4 padding-site-cards justify-content-center rounded-2 question-card-width card-width">
                <div>
                    <h2 class="primary-text-dark text-center mb-0" id="total_count"></h2>
                    <p class="primary-text-dark mb-0 text-center">Total Authors</p>
                </div> 
                <span class="total-question-svg bg-white d-flex justify-content-center align-items-center rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#cce0f1" d="M370.249 50.75v405.815c0 25.042-20.285 45.327-45.326 45.327h-271.9c-20.343 0-37.591-13.409-43.264-31.918-1.375-4.24-2.063-8.71-2.063-13.409V50.75c0-25.042 20.285-45.327 45.326-45.327h271.9a45.9 45.9 0 0 1 13.867 2.121c18.281 5.902 31.46 23.036 31.46 43.206z" opacity="1" data-original="#cce0f1" class=""></path><path d="M370.249 50.75v405.815c0 25.042-20.285 45.327-45.326 45.327h-271.9c-20.343 0-37.591-13.409-43.264-31.918 23.551 8.71 48.363 13.352 73.977 13.352 149.962 0 271.443-158.671 271.443-354.474 0-42.633-5.788-83.489-16.389-121.309 18.28 5.903 31.459 23.037 31.459 43.207z" opacity="1" fill="#00000010" data-original="#00000010"></path><path fill="#ffffff" d="M223.736 57.339h94.778v109.848h-94.778z" opacity="1" data-original="#ffffff" class=""></path><path fill="#36474f" d="M162.678 62.672H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h94.779c2.947 0 5.331 2.387 5.331 5.331s-2.385 5.331-5.332 5.331zM162.678 109.348H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h94.779c2.947 0 5.331 2.387 5.331 5.331s-2.385 5.331-5.332 5.331zM162.678 156.027H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h94.779c2.947 0 5.331 2.387 5.331 5.331s-2.385 5.331-5.332 5.331zM264.475 202.705H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h196.575a5.33 5.33 0 0 1 5.331 5.331 5.329 5.329 0 0 1-5.331 5.331zM136.328 249.384H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h68.429c2.947 0 5.331 2.387 5.331 5.331s-2.385 5.331-5.332 5.331zM109.557 296.06H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h41.657c2.947 0 5.331 2.387 5.331 5.331s-2.384 5.331-5.331 5.331zM117.33 342.738H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h49.43c2.947 0 5.331 2.387 5.331 5.331s-2.384 5.331-5.331 5.331zM166.765 389.417H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h98.866c2.947 0 5.331 2.387 5.331 5.331s-2.385 5.331-5.332 5.331zM196.01 436.096H67.9c-2.947 0-5.331-2.387-5.331-5.331s2.385-5.331 5.331-5.331h128.11a5.33 5.33 0 0 1 5.331 5.331 5.33 5.33 0 0 1-5.331 5.331z" opacity="1" data-original="#36474f" class=""></path><path fill="#faa629" d="m413.354 92.219 89.587 263.783c4.535 13.354-2.621 27.873-15.976 32.409s-27.873-2.622-32.409-15.976l-89.587-263.783c-4.536-13.355 2.621-27.874 15.976-32.409 13.347-4.534 27.873 2.62 32.409 15.976z" opacity="1" data-original="#faa629"></path><path fill="#36474f" d="M489.92 247.658c-4.594 6.307-11.107 11.244-19.061 13.919l-25.437-74.942c7.953-2.674 16.113-2.743 23.586-.548 12.068 3.428 22.215 12.547 26.603 25.369 4.32 12.752 1.783 26.123-5.691 36.202z" opacity="1" data-original="#36474f" class=""></path><path fill="#d81a60" d="M452.906 367.768c-9.257-5.691-18.17-10.697-26.74-15.085-50.327-25.506-90.574-29.003-132.879-18.923l-32.637-96.197c39.699-17.759 69.456-45.048 93.797-95.854 4.183-8.708 8.159-18.102 12.067-28.318z" opacity="1" data-original="#d81a60" class=""></path><path d="m366.514 113.392 86.392 254.376c-9.257-5.691-18.17-10.697-26.74-15.085L354.447 141.71c4.183-8.707 8.159-18.102 12.067-28.318zM445.423 186.657l25.442 74.894c5.443-1.776 10.2-4.641 14.096-8.366l-23.207-68.419c-5.33-.574-10.888.057-16.331 1.891z" opacity="1" fill="#00000010" data-original="#00000010"></path><path fill="#ffffff" d="m260.876 238.382 30.3 89.215c2.796 8.234-1.619 17.192-9.853 19.989l-75.842 25.758c-8.235 2.797-17.192-1.619-19.989-9.853l-30.3-89.215c-2.796-8.234 1.619-17.191 9.854-19.988l75.842-25.758c8.234-2.798 17.191 1.618 19.988 9.852z" opacity="1" data-original="#ffffff" class=""></path><path fill="#d81a60" d="M156.308 277.563c-16.277 15.079-23.915 34.714-17.979 52.191 5.936 17.478 23.952 28.4 46.045 30.447z" opacity="1" data-original="#d81a60" class=""></path><path fill="#faa629" d="m260.515 354.652 40.766 120.034c4.285 12.617-2.469 26.318-15.086 30.603s-26.318-2.469-30.603-15.086l-40.766-120.034z" opacity="1" data-original="#faa629"></path><path fill="#d81a60" d="M309.099 405.578c5.237 15.421-3.023 32.315-18.525 37.58l-19.055-56.106c15.502-5.265 32.314 3.023 37.58 18.526z" opacity="1" data-original="#d81a60" class=""></path><path fill="#36474f" d="M185.592 282.247a5.335 5.335 0 0 1 3.337-6.763l45.926-15.596a5.336 5.336 0 0 1 6.763 3.332 5.335 5.335 0 0 1-3.337 6.763l-45.926 15.596a5.33 5.33 0 0 1-6.763-3.332zM195.172 310.45a5.336 5.336 0 0 1 3.337-6.763l45.926-15.599c2.806-.942 5.821.549 6.763 3.332a5.336 5.336 0 0 1-3.337 6.763l-45.926 15.599a5.33 5.33 0 0 1-6.763-3.332zM204.747 338.654a5.336 5.336 0 0 1 3.337-6.763l45.926-15.599c2.806-.942 5.821.549 6.763 3.332a5.336 5.336 0 0 1-3.337 6.763l-45.926 15.599a5.33 5.33 0 0 1-6.763-3.332z" opacity="1" data-original="#36474f" class=""></path></g></svg>
                </span>
            </div>
            <input class="form-control w-25 mb-2" type="search" id="searchInput" placeholder="Search" aria-label="Search" onkeyup="searchChange()">      

            <!-- Top-right Add Button for Desktop -->
            <a class="btn btn-primary btn-sm ms-3 d-none d-md-block" href="Javascript:void(0);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddClass" aria-controls="offcanvasAddClass">
                Add Author
            </a>
        </div>
    </div>

    <hr class="mb-3">

    <!-- Basic Table -->
    <div class="table-responsive" id="render_table">
    </div>
    <!-- Bottom Fixed Button for Mobile -->
    <div class="fixedBottomBtnWrapper w-100 bg-white z-2 position-fixed bottom-0 start-0 p-3 d-block d-md-none">
        <a class="btn btn-primary btn-sm btn-w-icon fullWidthMbl" href="Javascript:void(0);" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddClass" aria-controls="offcanvasAddClass">
            Add Author
        </a>
    </div>

    <!-- Add Author Offcanvas Start -->
    <div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasAddClass" aria-labelledby="offcanvasAddClassLabel">
        <div class="offcanvas-header">
            <div class="mainTitleWrapper d-flex align-items-center gap-3">
                <div class="titleIconBox mblAppHide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                    </svg>
                </div>
                <h5 class="offcanvas-title" id="offcanvasAddClassLabel">Add Authors</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="box-body">
                <!-- Your form inputs go here -->
                <div class='form-group col-lg-12 mb-3' id='author_nameDiv'>
                    <label for="total_students" class="control-label">
                        Author Name <span class="text-danger">*</span>
                    </label>
                    <div class="">
                        <input type="text" class="form-control" id="auther_name" name="auther_name" onkeypress="return isText(event)">
                        <span class="control-label text-danger" id="auther_name_error">
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer text-end">
            <span class="control-label text-danger" id="mismatchID_error"></span>
            <button class="btn btn-primary btn-w-loading" onclick="save()" id="addBtn">
                <span class="btnText">Save</span>
            </button>
        </div>
    </div>
    
    <div id="successToast" class="toast customToast align-items-center  text-white border-0 position-absolute top-0  start-50 translate-middle-x" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body ps-4">
                <span id="statusMessage"></span>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <!-- Add Author Offcanvas End -->

    <!-- Edit Author Offcanvas Start -->
    <div class="offcanvas offcanvas-end w-25" tabindex="-1" id="offcanvasEditClass" aria-labelledby="offcanvasEditClassLabel">
        <div class="offcanvas-header">
            <div class="mainTitleWrapper d-flex align-items-center gap-3">
                <div class="titleIconBox mblAppHide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                    </svg>
                </div>
                <h5 class="offcanvas-title" id="offcanvasEditClassLabel">Edit Authors</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="box-body">
                <!-- Your form inputs go here -->
                <div class='form-group col-lg-25 mb-3' id='edit_author_nameDiv'>
                    <label for="total_students" class="control-label">
                        Author Name <span class="text-danger">*</span>
                    </label>
                    <div class="">
                        <input type="text" class="form-control" id="edit_auther_name" name="auther_name" onkeypress="return isText(event)">
                        <span class="control-label text-danger" id="edit_auther_name_error">
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer text-end">
            <span class="control-label text-danger" id="mismatchID_error"></span>
            <button class="btn btn-primary btn-w-loading" onclick="edit_name()" id="EditBtn">
                <span class="btnText">Save</span>
            </button>
        </div>
    </div>

    <div id="successToast" class="toast customToast align-items-center  text-white border-0 position-absolute top-0  start-50 translate-middle-x" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body ps-4">
                <span id="statusMessage"></span>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
    <!-- Edit Author Offcanvas End -->

    <!-- View Author Offcanvas Start -->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasViewClass" aria-labelledby="offcanvasViewClassLabel">
        <div class="offcanvas-header">
            <div class="mainTitleWrapper d-flex align-items-center gap-3">
                <div class="titleIconBox mblAppHide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                        <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                        <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                    </svg>
                </div>
                <h5 class="offcanvas-title" id="offcanvasViewClassLabel">View Authors</h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title mb-3">Author Details</h5>
                    <div class="mb-2">
                        <strong>Author ID:</strong>
                        <span id="viewAuthorID"></span>
                    </div>
                    <div class="mb-2">
                        <strong>Name:</strong>
                        <span id="viewAuthorName"></span>
                    </div>
                    <div class="mb-2">
                        <strong>Book Counts:</strong>
                        <span id="bkcounts"></span>
                    </div>
                    <div class="mb-2">
                        <strong>Book Names:</strong>
                        <span id="bknames"></span>
                    </div>
                    <div class="mb-2">
                        <strong>Created At:</strong>
                        <span id="viewAuthorCreatedAt"></span>
                    </div>
                    <div class="mb-2">
                        <strong>Updated At:</strong>
                        <span id="viewAuthorUpdatedAt"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View Author Offcanvas End -->

    <!-- Delete Popup Start -->
    <div class="modal customModalMain fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog customModalDialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body modal-body d-flex gap-3 align-items-center customModal">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modalImg">
                        <div id="lottie-container"></div>
                    </div>
                    <div class="modalDesc">
                        <h1 class="modal-title fs-3 mb-2" id="deleteModalTitle">Hey! Are you sure?</h1>
                        <p id="deleteModalDesc"> Detail will be deleted forever and you won't be able to recover them.</p>
                        <div class="modalBtnWrapper d-flex gap-2 mt-4">
                            <button type="button" class="btn btn-outline-gray" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" id="deleteclassBtn" onclick="delete_auther()">
                                <span class="btnText">Delete </span>
                                <span class="btnLoading d-none">
                                    <span class="btnLoading-icon">
                                    </span>
                                    <span class="btnLoading-text">Deleting </span>
                                </span>
                                <span class="btnSuccess d-none align-items-center gap-2">
                                    <div class="btnSuccess-icon">
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                        </svg>
                                    </div>
                                    <span class="btnSuccess-text"> Deleted</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- You can also push scripts --}}
@push('scripts')
<script>

    get_authors();

    function save()
    {
        var name        = $("#auther_name").val().trim();
        var errorCount  = 0

        if(name == '')
        {
            $("#author_nameDiv").addClass('has-error');
            $("#auther_name_error").text("This filed is required !");
            errorCount++;
        }
        else
        {
            $("#author_nameDiv").removeClass('has-error');
            $("#auther_name_error").text("");
        }

        if(errorCount == 0)
        {
            $.ajax({
                type: 'POST',
                url: '<?= ('save_author') ?>',
                data: {
                    'name': name,
                    _token : '<?=  csrf_token() ?>'
                },
                dataType: 'html',
                success: function(data) 
                {
                    var result = JSON.parse(data);

                    if(result.status == true)
                    {
                        canvas('offcanvasAddClass', 'hide');
                        showToast(result.message);
                        $("#auther_name").val("");
                        $("#author_nameDiv").removeClass('has-error');
                        $("#auther_name_error").text("");
                        get_authors();

                    }
                    else
                    {
                        if(result.message != '')
                        {
                            $("#author_nameDiv").addClass('has-error');
                            $("#auther_name_error").text(result.message);
                        }
                        else
                        {
                            $("#author_nameDiv").removeClass('has-error');
                            $("#auther_name_error").text("");
                        }
                    }
                }
            });
        }
        
    }

    function get_authors(page_no = 0, type = '')
    {
        var length    = $("#lengthSelect").val();
        var page_no   = page_no;
        var column    = ["#", "Name", "Create Date", "Books Count", "Action"];  
        var keyword   = $("#searchInput").val();  

        if(type == 'pre')
        {
            page_no       = parseInt(page_no) - 1
            var offset    = parseInt(page_no) * parseInt(length);
        }
        else if(type == 'next')
        {
            page_no       = parseInt(page_no) + 1
            var offset    = parseInt(page_no) * parseInt(length);
        }
        else
        {
            var offset    = parseInt(page_no) * parseInt(length);
        }
        
        $.ajax({
            type: 'POST',
            url: '<?= ('get_authors') ?>',
            data: {
                offset : offset,
                length : length,
                keyword: keyword,
                _token : '<?=  csrf_token() ?>'
            },
            dataType: 'html',
            success: function(data) 
            {
                var result  = JSON.parse(data);
                var data    = '';

                if(result.status == true)
                {
                    var authors = result.authors;
                    var counts  = result.counts;
                    var i       = 1;    

                    authors.forEach(author => 
                    {
                        var book_count = (counts[author['authorID']]) ? counts[author['authorID']] : 0;

                        data += `<tr>
                                    <td>${i++}</td>
                                    <td>${author['names']}</td>
                                    <td>${author['date']}</td>
                                    <td>${book_count}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-secondary" onclick=edit('${btoa(JSON.stringify(author))}');>Edit</button>
                                        <button class="btn btn-sm btn-outline-danger" onclick=delete_modal(${author['authorID']})>Delete</button>
                                        <button class="btn btn-sm btn-outline-success" onclick=view_show('${btoa(JSON.stringify(author))}')>View</button>
                                    </td>
                                </tr>`
                    });

                    html = datatable(data, result, page_no, column, "get_authors");
                    
                }
                else
                {
                    html = "No Data Found !"
                }

                $("#total_count").text(result.total_counts);
                $("#render_table").html(html);
            }
        });
        
    }

    function searchChange()
    {
        get_authors();
    }

    function edit(data)
    {
        var data = JSON.parse(atob(data));
        var name = data.names;
        var id   = data.authorID;
        canvas('offcanvasEditClass', 'show');
        $("#edit_auther_name").val(name);
        $("#EditBtn").val(id);
    }

    function edit_name()
    {
        var name        = $("#edit_auther_name").val().trim();
        var id          = $("#EditBtn").val();
        var errorCount  = 0

        if(name == '')
        {
            $("#edit_author_nameDiv").addClass('has-error');
            $("#edit_auther_name_error").text("This filed is required !");
            errorCount++;
        }
        else
        {
            $("#edit_author_nameDiv").removeClass('has-error');
            $("#edit_auther_name_error").text("");
        }

        if(errorCount == 0)
        {
            $.ajax({
                type: 'POST',
                url: '<?= ('save_author') ?>',
                data: {
                    'name': name,
                    'id'  : id,
                    _token : '<?=  csrf_token() ?>'
                },
                dataType: 'html',
                success: function(data) 
                {
                    var result = JSON.parse(data);

                    if(result.status == true)
                    {
                        canvas('offcanvasEditClass', 'hide');
                        showToast(result.message);
                        get_authors();
                    }
                    else
                    {
                        showToast(result.message, 'error');
                    }
                }
            });
        }
        
    }

    function view_show(data)
    {
        var data    = JSON.parse(atob(data));
        $("#viewAuthorID").text(data.authorID);
        $("#viewAuthorName").text(data.names);
        $("#bkcounts").text(data.book_count);
        $("#bknames").text(data.book_names);
        $("#viewAuthorCreatedAt").text(data.create_date);
        $("#viewAuthorUpdatedAt").text(data.update_date);

        canvas('offcanvasViewClass', 'show');
    }

    function delete_modal(id)
    {
        $("#deleteclassBtn").val(id);
        $("#deleteModal").modal('show');
    }

    function delete_auther()
    {
        var id =  $("#deleteclassBtn").val();

        $.ajax({
            type: 'POST',
            url: '<?= ('delete') ?>',
            data: {
                'id'  : id,
                _token : '<?=  csrf_token() ?>'
            },
            dataType: 'html',
            success: function(data) 
            {
                var result = JSON.parse(data);

                if(result.status == true)
                {
                    $("#deleteModal").modal('hide');
                    showToast(result.message);
                    get_authors();
                }
                else
                {
                    showToast(result.message, 'error');
                    $("#deleteModal").modal('hide');
                }
            }
        });
    }

    function isText(evt) 
    {
        evt = evt || window.event;
        var elementValue = document.getElementById(evt.target.id).value;
        var charCode = evt.which || evt.keyCode;
        var charTyped = String.fromCharCode(charCode);
        var regex = /^[A-Za-z ]+$/;// Only alphabetic characters allowed

        if (!regex.test(charTyped)) {
            return false;
        }
        if(elementValue.length>50)
        {
            return false;
        }
        return true;
    }

    function showToast(message, type = null) 
    {
        var toastElement            = document.getElementById('successToast');
        var statusMessageElement    = document.getElementById('statusMessage');

        if(type == 'error')
        {
            toastElement.classList.remove("bg-success");
            toastElement.classList.add("bg-danger");
        }
        else
        {
            toastElement.classList.remove("bg-danger");
            toastElement.classList.add("bg-success");
        }

        statusMessageElement.innerText   = message;
        var toast                        = new bootstrap.Toast(toastElement);
        toast.show();
    }

    function canvas(selector, action) 
    {
        var offcanvasElement = document.getElementById(selector);
        var offcanvas        = bootstrap.Offcanvas.getInstance(offcanvasElement);

        if (!offcanvas) 
        {
            offcanvas = new bootstrap.Offcanvas(offcanvasElement);
        }

        if (action == 'show') 
        {
            offcanvas.show();
        } 
        else 
        {
            offcanvas.hide();
        }
    }
</script>
@endpush
@endsection
