<label for="title">Title:</label>
<input type="text" id="title" name="title" value="{{ old('title', $conference->title ?? '') }}"><br><br>

<label for="description">Description:</label><br>
<textarea id="description" name="description">{{ old('description', $conference->description ?? '') }}</textarea><br><br>

<label for="date">Date:</label>
<input type="date" id="date" name="date" value="{{ old('date', $conference->date ?? '') }}"><br><br>

<label for="address">Address:</label>
<input type="text" id="address" name="address" value="{{ old('address', $conference->address ?? '') }}"><br><br>

<label for="participants">Participants:</label>
<input type="number" id="participants" name="participants" value="{{ old('participants', $conference->participants ?? '') }}"><br><br>
