//adapted from example code 'benskitchen.com'
var spinning = false;
function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer1').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer2').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer1').setAttribute('enabled', spinning.toString());
	document.getElementById('model__RotationTimer2').setAttribute('enabled', spinning.toString());
}

function wireframe()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	document.getElementById('model__headlight1').setAttribute('headlight', lightOn.toString());
	document.getElementById('model__headlight2').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}