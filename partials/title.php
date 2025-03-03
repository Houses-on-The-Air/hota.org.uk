<?php
    switch ($_SERVER['REQUEST_URI']) {
        case '/':
            $secondTitle = 'Amateur Radio Activities';
            break;
        case '/?page=about':
            $secondTitle = 'About Us';
            break;
        case '/?page=contact':
            $secondTitle = 'Contact Us';
            break;
        case '/?page=rules':
            $secondTitle = 'Rules';
            break;
        case '/?page=advertising':
            $secondTitle = 'Advertise With Us';
            break;
        case '/?page=awards':
            $secondTitle = 'See Available Awards';
            break;
        case '/?page=community-events':
            $secondTitle = 'Community Events';
            break;
        case '/?page=cookies':
            $secondTitle = 'Cookies Policy';
            break;
        case '/?page=privacy':
            $secondTitle = 'Privacy Policy';
            break;
        case '/?page=discord':
            $secondTitle = 'Join Our Discord Server';
            break;
        case '/?page=faq':
            $secondTitle = 'Frequently Asked Questions';
            break;
        case '/?page=get-licenced':
            $secondTitle = 'Get a UK Amateur Radio License for Free';
            break;
        case '/?page=house-activations':
            $secondTitle = 'House Activations';
            break;
        case '/?page=join-our-team':
            $secondTitle = 'Join Our Team';
            break;
        case '/?page=operating-guidelines':
            $secondTitle = 'Operating Guidelines';
            break;
        case '/?page=team':
            $secondTitle = 'Meet The Team';
            break;
        case '/?page=tgif':
            $secondTitle = 'TGIF DMR Network';
            break;
        case '/?page=contests':
            $secondTitle = 'Amateur Radio Contests';
            break;
        case '/?page=store':
            $secondTitle = 'Merch Store';
            break;
        case '/?page=appicons':
            $secondTitle = 'App Icons';
            break;
        case '/?page=nets':
            $secondTitle = 'Join Our Amateur Radio Net';
            break;
        case '/?page=resources':
                $secondTitle = 'Useful Amateur Radio Resources';
                break;
        case '/?page=terms':
            $secondTitle = 'Terms of Service';
            break;
        case '/?page=mailing-list':
            $secondTitle = 'Join Our Mailing List';
            break;
        case '/?page=log-entry':
            $secondTitle = 'Log Your Amateur Radio Contacts';
            break;
        case '/?page=gdpr':
            $secondTitle = 'General Data Protection Regulation (GDPR)';
            break;
        case '/?page=modern-slavery':
            $secondTitle = 'Modern Slavery Statement';
            break;
        case '/?page=glossary':
            $secondTitle = 'Amateur Radio Glossary';
            break;
        case '/?page=band-plans':
            $secondTitle = 'Amateur Radio Band Plans';
            break;
        case '/?page=opensource':
            $secondTitle = 'We Love Open Source';
            break;
        case '/?page=support-us':
            $secondTitle = 'Support Us';
            break;
        default:
            $secondTitle = 'Amateur Radio Activities';
        }
?>
