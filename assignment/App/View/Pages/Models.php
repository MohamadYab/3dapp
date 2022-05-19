<!-- Start X3D models and 3D Image Gallery -->
<div id="models">
    <!-- Row to hold 1) the X3D model,  2) the gallery-->
    <div class="row">
        <!-- 1) X3D Models -->
        <div class="col-sm-8 col-md-9">
            <!-- Card to hold X3D Models -->
            <div class="card text-left">

                <!-- X3D Models Card Header -->
                <div class="card-header">
                    <button class="btn btn-danger" onclick="updateScene('coke');">
                        Coke
                    </button>
                    <button class="btn btn-success" onclick="updateScene('sprite');">
                        Sprite
                    </button>
                    <button class="btn btn-danger" onclick="updateScene('pepper');">
                        Pepper
                    </button>
                    <button class="btn btn-success" onclick="updateScene('appletiser');">
                        Pepper
                    </button>
                </div>

                <!-- X3D Models Card Body -->
                <div class="card-body">
                    <h2 class="card-title"><span id="model_brand">Coke</span> X3D Model</h2>
                    <div class="model3D">
                        <x3d>
                            <scene>
                                <Switch whichChoice="0" id='switcher'>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/coke.x3d" > </inline>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/sprite.x3d"> </inline>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="assets/x3d/pepper_animation.x3d"> </inline>
                                </Switch>
                            </scene>
                        </x3d>
                    </div> 
                    <p>This 3D model has been created in Blender and exported to X3D to display online.</p>
                </div>
            </div>
        </div>

        <!-- 2) 3D image gallery -->
        <div class="col-sm-4 col-md-3">

                <div class="card text-left">
                <!-- Gallery Header Title -->
                <div class="card-header gallery-header">
                    <p class="title_gallery drinksText" >3D Images Gallery</p>
                </div>

                <div class="card-body gallery-body">
                    <!-- Gallery images -->
                    <!-- I need to use the image generator to generate images here. -->
                    <div class="gallery" id="gallery"></div>
                </div>
            </div> <!-- End gallery card -->
        </div> <!-- End gallery column -->

    </div> <!-- End of first row -->

    <!-- Start of second row -->
    <div id="interaction" class="row">

        <!-- CAMERA CONTROLS Column-->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <p>Camera Angle</p>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraFront();">Front</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBack();">Back</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                    </div>
                    <p>These buttons control the camera view angle.</p>
                </div>
            </div>
        </div> <!-- End of CAMERA CONTROLS Column-->

        <!-- Animation CONTROLS Column-->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <p>Animation Angle</p>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary btn-responsive" onclick="spin();">Sping-X</a>
                        <a href="#" class="btn btn-danger btn-responsive" onclick="stopRotation();">Stop</a>
                    </div>
                    <p>These buttons control the model's animation.</p>
                </div>
            </div>
        </div> <!-- End of Animation CONTROLS Column-->

        <!-- Render CONTROLS Column-->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header">
                    <p>Light & Wireframe</p>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="headlight();">Light</a>
                        <a href="#" class="btn btn-secondary btn-responsive" onclick="wireframe();">Wireframe</a>
                    </div>
                    <p>These buttons control the light & wireframe.</p>
                </div>
            </div>
        </div> <!-- End of Render CONTROLS Column-->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2 id="brand" class="card-title drinksText">Coca Cola</h2>
                        <h3 id="founded" class="card-subtitle drinksText">New York Harbour, 1886</h3>
                        <p id="description" class="card-text drinksText">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End of models page -->