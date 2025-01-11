<div class="minimog-modal modal-product-write-review" id="modal-product-write-review" aria-hidden="true" role="dialog" hidden>
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <div class="button-close-modal" role="button" aria-label="Close"></div>
        <div class="modal-content-wrap">
            <div class="modal-content-inner">
                <div class="modal-content-header">
                    <h4 class="modal-title">Write a Review</h4>
                </div>
                <div id="review_form">
                    <div id="respond" class="comment-respond">
                        <span id="reply-title" class="comment-reply-title">Be the first to review &ldquo;Dvala Sheet set&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></span>
                        <div id="commentform" class="comment-form" novalidate>

                            <div class="comment-form-rating">
                                <label for="rating">Your rating:&nbsp;<span class="required">*</span></label>
                                <select name="rating" id="rating" class="rating-select" required wire:model="rating">
                                    <option value="" disabled selected>Rate&hellip;</option>
                                    <option value="5">Perfect</option>
                                    <option value="4">Good</option>
                                    <option value="3">Average</option>
                                    <option value="2">Not that bad</option>
                                    <option value="1">Very poor</option>
                                </select>
                            </div>

                            <p class="comment-form-comment"><label for="comment">Your review</label><textarea id="comment" name="comment" cols="45" rows="8" wire:model="review" required></textarea></p>

                            <p class="form-submit">
                                <button type="button" class="comment-form__attachment-button attachment-button">
                                </button>
                                <input type="submit" id="submit" class="submit" value="Submit Now" wire:Click="save" />
                                <input type='hidden' name='comment_post_ID' value='1144' />
                            </p>
                        </div>
                    </div><!-- #respond -->
                </div>
            </div>
        </div>
    </div>
</div>