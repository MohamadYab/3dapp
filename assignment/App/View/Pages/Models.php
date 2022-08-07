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
                        Appletiser
                    </button>
                </div>

                <!-- X3D Models Card Body -->
                <div class="card-body">
                    <h2 class="card-title"><span id="model_brand">Coke</span> X3D Model</h2>
                    <div class="model3D">
                        <!-- <x3d>
                            <scene>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="App/assets/x3d/Coke.x3d"> </inline>
                            </scene>
                            
                        </x3d> -->
                        <x3d id="model" >
                            <scene>
                                <Switch whichChoice="0" id='switcher' render="true" visible="true" bboxcenter="0,0,0" bboxsize="-1,-1,-1">
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="App/assets/x3d/coke.x3d" > </inline>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="App/assets/x3d/Sprite.x3d"> </inline>
                                    <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="App/assets/x3d/Pepper.x3d"> </inline>
                                </Switch>
                            </scene>
                        </x3d>
                    </div> 
                    <p>This 3D model has been created in Blender and exported to X3D to display online.</p>
                </div>
            </div>
        </div>

        <!-- 3D Model Controls -->
        <div class="col-sm-4 col-md-3">
            <!-- CAMERA CONTROLS Column-->
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
            </div> <!-- End of CAMERA CONTROLS Column-->

            <!-- Animation CONTROLS Column-->
            <div class="card text-left">
                <div class="card-header">
                    <p>Animation Angle</p>
                </div>
                <div class="card-body">
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary btn-responsive" onclick="animateModel();">Sping-X</a>
                        <a href="#" class="btn btn-danger btn-responsive" onclick="stopRotation();">Stop</a>
                    </div>
                    <p>These buttons control the model's animation.</p>
                </div>
            </div> <!-- End of Animation CONTROLS Column-->

            <!-- Render CONTROLS Column-->
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
            </div> <!-- End of Render CONTROLS Column-->
        </div> <!-- End of CONTROLS Column -->
    </div> <!-- End of first row -->

    <!-- 2) Info Row -->
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

    <!-- Start of second row -->
    <div id="interaction" class="row">
        <!-- 2) 3D image gallery -->
        <div class="custom-card">
            <!-- Gallery Header Title -->
            <div class="card-header gallery-header">
                <p class="title_gallery drinksText" >3D Images Gallery</p>
            </div>

            <div class="gallery" id="gallery"></div>
        </div> <!-- End gallery column -->
    </div>
</div> <!-- End of models page -->