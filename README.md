# Introduction:

The Bagisto Image Crop Extension enhances the product image management experience within the Bagisto e-commerce platform by offering a seamless solution for cropping images during both the product creation and editing processes. 

# Some Key features of the Image Crop Extension

* **Image Cropping During Product Creation:** 
    * When an admin is creating a new product, then at time of uploading the image, the image cropper interface will automatically load.
    * The image cropper provides an intuitive and user-friendly interface that allows the admin to crop the image according to their preferences. The cropping tool offers adjustable frames to precisely select the desired portion of the image.
    * After cropping, the admin can save the cropped image, which will then be used as the product image. This ensures that only the most relevant part of the image is displayed to customers.
 
* **Full Image Selection Option:**  
    * For admins who prefer not to crop the image, the extension offers an option to select the full image without any cropping. This provides flexibility for users who want to use the entire image as is.
    * The full image will be saved and displayed as the product image, giving admins the freedom to choose between a cropped or full image based on their requirements.

* **Image Editing Functionality:**
   * In addition to cropping images during the product creation process, the extension supports image cropping during the product image editing process.
   * When an admin edits an existing product image, they will be able to access the same cropping tool used during the initial creation. This ensures consistency in image management and allows for adjustments as needed.
 
# **Benefits:**
- **Enhanced Image Control**: Admins gain precise control over the display of product images, allowing for better presentation of products with cropped or full images as needed.
- **Improved User Experience**: The image cropper tool provides an easy-to-use interface that enhances the overall user experience for admins managing product images.
- **Flexibility**: The extension caters to different needs by allowing both cropped and full image options, accommodating various preferences and requirements for product presentation.
- **Version Compatible:** The extension is compatible with both Bagisto version 2.0.0 and the latest version 2.2.2. 

# Requirements:
* Bagisto: v2.0.0,v2.2.2
* PHP: 8.1 or higher
* Composer 2.6.3 or higher

# Installation :
Unzip the respective extension zip and then merge "packages" folder into project root directory rename the Extract folder to ImageCrop

* Goto config/app.php file and add following line under 'providers'

```
Webkul\ImageCrop\Providers\ImageCropServiceProvider::class
```

* Goto composer.json file and add following line under 'psr-4'

```
"Webkul\\ImageCrop\\": "packages/Webkul/ImageCrop/src"
```
* Run these below commands to complete the setup:

```
composer dump-autoload
```
```
php artisan optimize:clear
```
That's it, now just execute the project on your specified domain.
