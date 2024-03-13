<div class="col-12 p-2">
    <div class="d-flex justify-content-around align-items-center sticky-top">
        <div class="share-icon">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareModal">
                Share
            </button>
        </div>
        <div>

        </div>
        <div class="header-widgets">

        </div>
    </div>
</div>
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">Share This Link</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Social media sharing buttons -->
                <div class="btn-group" role="group" aria-label="Share buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
                       target="_blank" class="btn btn-primary">Facebook</a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}" target="_blank"
                       class="btn btn-info">Twitter</a>
                    <!-- Add more social media platforms as needed -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

