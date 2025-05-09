<?php
// testimonials.php

// Dummy testimonials data
$testimonials = [
    [
        'name' => 'Sarah Johnson',
        'title' => 'Marketing Director, TechSolutions Inc.',
        'rating' => 5,
        'text' => '"Working with this team was an absolute pleasure. They delivered our project ahead of schedule and the quality exceeded our expectations. Their attention to detail and creative solutions helped us achieve a 30% increase in customer engagement."',
        'date' => 'March 15, 2024',
        'image' => 'https://randomuser.me/api/portraits/women/32.jpg'
    ],
    [
        'name' => 'Michael Chen',
        'title' => 'CEO, GreenFuture LLC',
        'rating' => 4,
        'text' => '"The service was professional from start to finish. We had some very specific requirements and they accommodated all of them while keeping the project on budget. The only reason I\'m not giving 5 stars is because communication could be slightly faster."',
        'date' => 'February 28, 2024',
        'image' => 'https://randomuser.me/api/portraits/men/45.jpg'
    ],
    [
        'name' => 'Priya Patel',
        'title' => 'Founder, Bloom & Grow',
        'rating' => 5,
        'text' => '"As a small business owner, I was nervous about investing in professional services, but this was worth every penny. They understood my vision perfectly and translated it into results. Our sales increased by 45% in the first month after implementing their strategies!"',
        'date' => 'January 10, 2024',
        'image' => 'https://randomuser.me/api/portraits/women/68.jpg'
    ],
    [
        'name' => 'David Rodriguez',
        'title' => 'Operations Manager, UrbanEats',
        'rating' => 5,
        'text' => '"Exceptional work! They took our vague ideas and turned them into a concrete, successful campaign. The team was responsive, creative, and delivered beyond what we imagined. We\'ve already contracted them for two more projects."',
        'date' => 'December 5, 2023',
        'image' => 'https://randomuser.me/api/portraits/men/22.jpg'
    ],
    [
        'name' => 'Emily Wilson',
        'title' => 'Director of Digital, StyleHub',
        'rating' => 4,
        'text' => '"Great partnership overall. They brought fresh ideas to the table and executed them flawlessly. The project did require a couple of revisions, but they were very accommodating. Would definitely recommend to others in the industry."',
        'date' => 'November 18, 2023',
        'image' => 'https://randomuser.me/api/portraits/women/55.jpg'
    ],
    [
        'name' => 'James Kim',
        'title' => 'CTO, NexGen Robotics',
        'rating' => 5,
        'text' => '"Technical excellence combined with creative thinking. We work in a highly specialized field and they took the time to understand our technology before developing the marketing strategy. The results speak for themselves - 300% more qualified leads than our previous campaign."',
        'date' => 'October 3, 2023',
        'image' => 'https://randomuser.me/api/portraits/men/75.jpg'
    ]
];

// Function to generate star ratings
function generateStars($rating) {
    $stars = '';
    for ($i = 0; $i < 5; $i++) {
        if ($i < $rating) {
            $stars .= '★';
        } else {
            $stars .= '☆';
        }
    }
    return $stars;
}
?>
<?php include '../logic/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Testimonials</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
        }
        
        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        
        .client-info {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .client-dp {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 3px solid #f1c40f;
        }
        
        .client-name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 5px;
            color: #2c3e50;
        }
        
        .client-title {
            font-size: 14px;
            color: #7f8c8d;
        }
        
        .stars {
            color: #f1c40f;
            font-size: 20px;
            margin: 10px 0;
        }
        
        .testimonial-text {
            font-style: italic;
            color: #555;
            border-left: 3px solid #f1c40f;
            padding-left: 15px;
        }
        
        .date {
            text-align: right;
            font-size: 12px;
            color: #95a5a6;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>What Our Clients Say</h1>
    
    <div class="testimonials-container">
        <?php foreach ($testimonials as $testimonial): ?>
        <div class="testimonial-card">
            <div class="client-info">
                <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>" class="client-dp">
                <div>
                    <div class="client-name"><?php echo $testimonial['name']; ?></div>
                    <div class="client-title"><?php echo $testimonial['title']; ?></div>
                </div>
            </div>
            <div class="stars"><?php echo generateStars($testimonial['rating']); ?></div>
            <div class="testimonial-text">
                <?php echo $testimonial['text']; ?>
            </div>
            <div class="date"><?php echo $testimonial['date']; ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>