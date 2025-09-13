# Call Remainder - Educational Management System

A comprehensive web-based educational management system built with PHP, designed to streamline administrative tasks for educational institutions. The system provides features for managing courses, students, fees, payments, and administrative functions.

## 🚀 Features

### Core Functionality
- **Student Management**: Complete student registration and profile management
- **Course Management**: Add, edit, and manage educational courses
- **Fee Management**: Handle fee structures and payment tracking
- **Payment Processing**: Secure payment handling and receipt generation
- **User Administration**: Multi-level user access control
- **Reports & Analytics**: Payment reports and system logs
- **Site Settings**: Configurable system settings

### Key Modules
- **Admin Dashboard**: Centralized administrative control panel
- **Student Portal**: Student-focused interface for course and payment information
- **Payment Gateway**: Integrated payment processing system
- **Reporting System**: Comprehensive reports for payments and system activities
- **User Management**: Role-based access control system

## 📁 Project Structure

```
call_remainder/
├── 📄 Core PHP Files
│   ├── index.php              # Main entry point
│   ├── login.php              # User authentication
│   ├── db_connect.php         # Database connection
│   ├── ajax.php               # AJAX request handler
│   └── admin_class.php        # Admin functionality
│
├── 📋 Management Modules
│   ├── manage_student.php     # Student management
│   ├── manage_course.php      # Course management
│   ├── manage_fee.php         # Fee management
│   ├── manage_payment.php     # Payment management
│   └── manage_user.php        # User management
│
├── 📊 Display & Reports
│   ├── students.php           # Student listing
│   ├── courses.php            # Course listing
│   ├── fees.php               # Fee structure display
│   ├── payments.php           # Payment tracking
│   ├── payments_report.php    # Payment reports
│   └── logs.php               # System logs
│
├── 🎨 UI Components
│   ├── header.php             # Page header
│   ├── navbar.php             # Navigation bar
│   ├── topbar.php             # Top navigation
│   └── home.php               # Dashboard home
│
├── 🖼️ Assets
│   ├── Multiple GIF images    # UI animations and graphics
│   ├── JPEG/PNG images       # Static images and icons
│   ├── kit.png               # Application kit/logo
│   └── rem.mp3               # Reminder audio file
│
└── ⚙️ Configuration
    └── site_settings.php      # System configuration
```

## 🛠️ Technology Stack

- **Backend**: PHP
- **Database**: MySQL (implied from db_connect.php)
- **Frontend**: HTML, CSS, JavaScript
- **Audio**: MP3 support for reminder functionality
- **Graphics**: GIF animations, JPEG/PNG images

## 📋 Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Modern web browser

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/dharaneesh-2005/call_remainder.git
   cd call_remainder
   ```

2. **Database Setup**
   - Create a MySQL database for the application
   - Import the database schema (if available)
   - Update `db_connect.php` with your database credentials

3. **Web Server Configuration**
   - Place the files in your web server directory
   - Ensure PHP and MySQL extensions are enabled
   - Set appropriate file permissions

4. **Configuration**
   - Access `site_settings.php` to configure system settings
   - Set up admin credentials through the login system

## 🎯 Usage

### Admin Access
1. Navigate to the application URL
2. Use admin credentials to log in via `login.php`
3. Access the admin dashboard through `home.php`

### Key Functions
- **Student Registration**: Use `manage_student.php` to add/edit students
- **Course Management**: Configure courses via `manage_course.php`
- **Fee Structure**: Set up fees using `manage_fee.php`
- **Payment Tracking**: Monitor payments through `payments.php`
- **Reports**: Generate reports via `payments_report.php`

## 🔧 Configuration

### Database Connection
Update the database connection settings in `db_connect.php`:
```php
// Configure your database credentials
$host = 'localhost';
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';
```

### Site Settings
Access `site_settings.php` to configure:
- Site name and branding
- Email settings
- Payment gateway configuration
- System preferences

## 📱 Features Overview

### Student Management
- Complete student profiles
- Course enrollment tracking
- Payment history
- Academic progress monitoring

### Course Management
- Course creation and editing
- Fee structure assignment
- Enrollment capacity management
- Course scheduling

### Payment System
- Multiple payment methods support
- Receipt generation
- Payment history tracking
- Automated fee reminders (with audio alerts)

### Administrative Tools
- User role management
- System logs and monitoring
- Comprehensive reporting
- Site configuration management

## 🔐 Security Features

- User authentication system
- Role-based access control
- Secure database connections
- Input validation and sanitization

## 📞 Reminder System

The application includes an audio reminder system (`rem.mp3`) that can be used for:
- Payment due notifications
- Course schedule reminders
- Important announcements
- System alerts

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👨‍💻 Author

**Dharaneesh**
- GitHub: [@dharaneesh-2005](https://github.com/dharaneesh-2005)

## 📞 Support

For support and questions:
- Create an issue in the GitHub repository
- Contact the developer through GitHub profile

## 🔄 Version History

- **v1.0.0** - Initial release with core functionality
  - Student management
  - Course management
  - Payment processing
  - Admin dashboard

## 🎯 Roadmap

- [ ] Enhanced reporting dashboard
- [ ] Mobile-responsive design improvements
- [ ] API integration for third-party services
- [ ] Advanced notification system
- [ ] Multi-language support
- [ ] Advanced analytics and insights

---

**Note**: This is an educational management system designed to streamline administrative tasks for educational institutions. The system provides a comprehensive solution for managing students, courses, fees, and payments in a centralized platform.
