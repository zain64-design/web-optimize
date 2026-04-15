<?php  
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
         
        if($actual_link == 'https://goodspeedpublishing.com/' || $actual_link == 'https://goodspeedpublishing.com/index'){ ?>
            <title>Top-Selling Book Writing Services | Book Writers For Hire</title>
            <meta name="description" content="Goodspeed Publishing offers professional book writing services for authors in need of expert assistance. Hire our best book writers to bring your ideas to life.">
            <link rel="canonical" href="https://llc.com/" />
        <?php }

        elseif($actual_link == 'https://goodspeedpublishing.com/lp/book-editing'){  ?>
            <title>Top Book Editing Services in USA | Professional Book editors</title>
            <meta name="description" content="Our Book editing services company offers top notch book editing by our professional book editors. Hire a book editor and get an error free book today!">            
            <link rel="canonical" href="https://goodspeedpublishing.com/lp/book-editing" />
        <?php }

        elseif($actual_link == 'https://goodspeedpublishing.com/lp/book-marketing'){  ?>
            <title>Top-Notch USA Book Marketing Company | Book Promotion</title>
            <meta name="description" content="We are a professional book marketing company that aims to provide high-level book marketing services. Our marketing experts are award-winning author.">          
            <link rel="canonical" href="https://goodspeedpublishing.com/lp/book-marketing" />
        <?php }

        elseif($actual_link == 'https://goodspeedpublishing.com/lp/book-publishing'){  ?>
            <title>USA's Award-Winning leading Online Book Publishing Services</title>
            <meta name="description" content="we offer hassle-free book publishing services. Our Professional Book Publications are award-winning authors dedicated to help you become a bestseller. ">               
            <link rel="canonical" href="https://goodspeedpublishing.com/lp/book-publishing" />
        <?php }

        elseif($actual_link == 'https://goodspeedpublishing.com/lp/ghostwriting'){  ?>
            <title>Best-Selling Ghostwriting Services | Ghostwriters For Hire</title>
            <meta name="description" content="Looking for a professional ghostwriting company? Our team of ghostwriters for hire can help bring your story to life. We offer ghostwriting services for your needs.">          
            <link rel="canonical" href="https://goodspeedpublishing.com/lp/ghostwriting" />
        <?php }

?>