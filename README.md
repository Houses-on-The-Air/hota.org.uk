# Houses on The Air (HOTA)

Houses on The Air (HOTA) is an amateur radio activity that encourages operators to set up and operate from various houses. The goal is to promote fixed operations and to make contacts with other amateur radio operators from unique house locations.

## About This Project

This repository contains the source code for the Houses on The Air (HOTA) website and related tools. The website provides information, resources, and tools for amateur radio operators participating in HOTA activities.

## Features

- Information about HOTA activities and events
- Rules and guidelines for participation
- Log submission and award tracking
- Resources for amateur radio operators
- Community features including mailing lists and Discord server

## Getting Started

1. Clone this repository
2. Set up a web server with PHP support
3. Configure the database connection in `includes/db_config.php`
4. Visit the site in your web browser

## Docker

The project is also available as a Docker container. You can pull the image from the GitHub Container Registry:

```bash
docker pull ghcr.io/Houses-on-The-Air/hota.org.uk:latest
```

Run the container:

```bash
docker run -p 8000:80 ghcr.io/Houses-on-The-Air/hota.org.uk:latest
```

## Contributing

We welcome contributions to improve the HOTA website and tools. Please see our [contribution guidelines](CODE_OF_CONDUCT.md) for more information.

## License

This project is licensed under the Creative Commons Attribution 4.0 International License - see the LICENSE file for details.

## Contact

For questions or comments, please contact us at info@hota.org.uk.
