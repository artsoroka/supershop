<html>
<body>
{{ (isset($status)) ? $status : "" }} 
<form action="/admin/categories/{{ $category->id }}/edit" method="POST"> 
  <input type="text" name="title" placeholder="title" value="{{ (isset($category['title'])) ? $category['title'] : '' }}" />
  <br>
  <input type="text" name="parent_id" placeholder="parent id" value="{{ (isset($category['parent_id'])) ? $category['parent_id'] : '' }}" /> 
  <br> 
  <input type="text" name="alias" placeholder="alias" value="{{ (isset($category['alias'])) ? $category['alias'] : '' }}" />
  <br>
  <input type="submit" value="Edit entry " />
</form>


</body>
</html>
