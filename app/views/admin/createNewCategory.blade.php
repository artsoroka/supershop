<html>
<body>

<form action="/admin/categories/new" method="POST"> 
  <input type="text" name="title" placeholder="title">{{ (isset($old_input['title'])) ? $old_input['title'] : '' }}</input>
  <br>
  <input type="text" name="parent_id" placeholder="parent id">{{ (isset($old_input['parent_id'])) ? $old_input['parent_id'] : '' }} </input>
  <br> 
  <input type="text" name="alias" placeholder="alias">{{ (isset($old_input['alias'])) ? $old_input['alias'] : '' }}</input>
  <br>
  <input type="submit" value="Create new" />
</form>


</body>
</html>
