Simple Symfony bundle I wrote because I'm tired of writing it all
the time for each project where I need current time.

Feel free to use it.

## Installation

`composer require rikudou/clock-bundle`

## Usage

1. Typehint the `\Rikudou\Clock\ClockInterface` as your dependency
2. You can now easily test your time dependent functions
3. ???
4. Profit

## Services:

- `rikudou.clock.clock` - standard DateTime class
- `rikudou.clock.immutable` - DateTimeImmutable
- `rikudou.clock.fixed_timezone` - DateTime with specified timezone
- `rikudou.clock.fixed_timezone_immutable` - DateTimeImmutable with specified timezone
- `rikudou.clock.default` - the implementation configured as default
- `Rikudou\Clock\ClockInterface` - alias to `rikudou.clock.default`, autowiring supported

## Configuration

Generated automatically via `php bin/console config:dump rikudou_clock > config/packages/rikudou_clock.yaml`

```yaml
# Default configuration for extension with alias: "rikudou_clock"
rikudou_clock:

    # The clock that will be used as default when injecting interface
    default_clock:        rikudou.clock.clock # One of "rikudou.clock.clock"; "rikudou.clock.immutable"; "rikudou.clock.fixed_timezone"; "rikudou.clock.fixed_timezone_immutable"

    # The timezone used for timezoned clocks
    timezone:             UTC
```