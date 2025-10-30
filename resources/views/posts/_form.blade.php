@csrf
<div class="mb-3">
  <label class="form-label">Title</label>
  <input type="text" name="title" class="form-control" value="{{ old('title', $post->title ?? '') }}" required>
</div>

<div class="mb-3">
  <label class="form-label">Body</label>
  <textarea name="body" rows="6" class="form-control" required>{{ old('body', $post->body ?? '') }}</textarea>
</div>

<div class="mb-3">
  <label class="form-label">Status</label>
  <select name="status" class="form-select">
    <option value="draft" {{ old('status', $post->status ?? 'draft')=='draft'?'selected':'' }}>Draft</option>
    <option value="published" {{ old('status', $post->status ?? '')=='published'?'selected':'' }}>Published</option>
  </select>
</div>