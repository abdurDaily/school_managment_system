<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Attendance Record</title>
	<style>
		
			.even-row {
				background-color: #f2f2f2; /* Set the color for even rows */
			}

			.odd-row {
				background-color: #ffffff; /* Set the color for odd rows */
			}
    
	</style>
</head>
<body>
	<div class="row mb-3" style="display:flex;">
		<img style="width: 100px;" src="{{ public_path('custom_images/iiuc-logo.png') }}" alt="">
		
		<div class="contents" style="text-align:right; display:flex; margin-top:-100px; width:400px; margin-left:300px;">
			<span>International Islamic University Chittagong(IIUC)</span> <br>
			<span>Electronic & Telecommunication Engineering(ETE)</span> <br>
			<span><strong>Sunject Name :</strong> {{ $SubjectName->subject_name }}</span> <br>
			<span> <strong>Batch No :</strong> {{ $batchWithStudent->batch_no }}</span> <br>
			<span><strong>Download Date :</strong> {{ $batchWithStudent->created_at->format('Y-M-d'); }}</span>
		</div>

	</div>
	<table class="table table-responsive bg-info">
		<tr style="background: rgb(92, 92, 94);text-align:center;">
			<td style="color:#fff; font-weight:bold; padding:10px;">SN</td>
			<td style="color:#fff; font-weight:bold; padding:10px;">Student id</td>
			<td style="color:#fff; font-weight:bold; padding:10px;">Student name</td>
			<td style="color:#fff; font-weight:bold; padding:10px;">Percentage</td>
		</tr>
		@if (isset($students))
			
	  
		@foreach ($students as $key=>$student)
			@php
				$isEven = $key % 2 === 0;
			@endphp
		<tr class="{{ $isEven ? 'even-row' : 'odd-row' }}" style="text-align:center;">

			<td>{{ ++$key }}</td>
			<td>{{ $student->std_id }}</td>
			<td>
				{{ $student->std_name }}
			</td>
			<td>
				{{ $student->my_attendence_count .'/'. $totalAttendence }}
			</td>
		</tr>
		@endforeach
		@endif
	
	
	 </table>
</body>
</html>