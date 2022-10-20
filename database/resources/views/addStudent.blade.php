<h1>ADD YOUR NAME TO DB</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">insert name</button>
</form>