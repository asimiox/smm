<?php include 'header.php'; ?>
<style>.feedback-container,.feedback-input,select.feedback-input{box-shadow:rgba(0,0,0,.05) 0 6px 24px 0,rgb(0 22 105 / 8%) 0 0 0 1px}.feedback-container{background-color:#fff;border-radius:5px;padding:25px;max-width:400px;margin:50px auto}.feedback-heading{color:#2c3e50;text-align:center;margin-bottom:30px;font-weight:600;font-size:22px}.feedback-label{font-weight:700;color:#555}.feedback-input,select.feedback-input{width:100%;border:1px solid #10122d00;border-radius:4px;padding-left:8px;display:flex;align-items:center;color:#10122d}.btn-feedback,.btn-feedback:hover{background:linear-gradient(to right,#10122d 0,#1a1d4e 100%)!important;box-shadow:0 5px 15px -5px #10122d;color:#fff}input.feedback-input:hover,select.feedback-input:hover,textarea.feedback-input:hover{border:1px solid #10122d00;box-shadow:rgba(0,0,0,.05) 0 6px 24px 0,rgb(0 22 105 / 8%) 0 0 0 1px}.feedback-input:focus,select.feedback-input:focus,textarea.feedback-input:focus{outline:0;border:none}.feedback-textarea{resize:vertical;min-height:100px}.btn-feedback{font-weight:500;border-radius:5px;font-size:1.25rem;cursor:pointer;padding:12px 20px;width:100%}.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus{outline:0;border:none}.btn-feedback:hover{opacity:.8}.nm{padding:0 20px}.sdk{background:#f5e509;color:#fff;padding:1px 8px;border-radius:20px}.md{margin-bottom:12px;font-size:16px}</style>
<div class="nm">
    <div class="feedback-container"style="margin-bottom:-20px;padding:4px">
         <h4 class="feedback-heading md">Your submissions left for today : <span class="sdk"><?php echo $remainingSubmissions; ?></span></h4>
        </div>
<div class="feedback-container">
  <h3 class="feedback-heading">GIVE US FEEDBACK! ✨</h3>
  <form action="admin/feedback" method="post">
    <div class="form-group">
      <label class="feedback-label" for="feedbackTitle">Title:</label>
      <input type="text" class="form-control feedback-input" name="title" id="feedbackTitle" placeholder="Enter feedback title">
    </div>
    <div class="form-group">
      <label class="feedback-label" for="feedbackType">Type:</label>
      <select class="form-control feedback-input" id="feedbackType" name="type">
        <option value="bug">Bug</option>
        <option value="suggestion">Suggestion</option>
        <option value="compliment">Compliment</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="form-group">
      <label class="feedback-label" for="feedbackMessage">Message:</label>
      <textarea class="form-control feedback-input feedback-textarea" id="feedbackMessage" name="message" rows="5" placeholder="Enter your feedback message"></textarea>
    </div>
    <button type="submit" class="btn btn-feedback">Submit Feedback</button>
  </form>
</div></div>
 <script><?php if(isset($errorMessage)) {echo "alert('$errorMessage');"; }?></script>
<?php include 'footer.php'; ?>
