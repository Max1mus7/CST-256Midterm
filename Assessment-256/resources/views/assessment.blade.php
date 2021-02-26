<body>
	<form action="addAssessment" method="post">
    <!-- necessary input for laravel forms -->
    {{ csrf_field() }}
    		<!-- input box to hold assessment name -->
    		<label for="name">Assessment Name: </label><br>
    		<input type='text' name='name' id='name' value=""></input>
			<br>
			<!-- input box to hold assigned date -->
    		<label for="dateAssigned">Assigned Date: </label><br>
    		<input type='date' name='dateAssigned' id='dateAssigned' value=""></input>
			<br>
			<!-- input box to hold user's gender -->
    		<label for="dueDate">End Date: </label><br>
    		<input type='date' name='dueDate' id='dueDate' value=""></input>
    		<br>
    		<!-- input box to hold user's gender -->
    		<label for="pointValue">Point Value: </label><br>
    		<input type='text' name='pointValue' id='pointValue' value = ""></input>
			<br>
			<input type="submit" name="submission" value="Submit Assessment"></input>
	</form>
	@if(isset($passed))
		@if($passed)
			<h3>Matches CST-256</h3>
		@else
			<h3>Does not match CST-256</h3>
		@endif
	@endif
	</body>