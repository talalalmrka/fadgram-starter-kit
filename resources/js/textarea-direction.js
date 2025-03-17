document.addEventListener('alpine:init', () => {
    Alpine.data('textareaDirection', () => ({
        direction: '',
        textareaEl: {},
        textareaId: null,
        rtlButton: {
            [':class']() {
                return {
                    'btn-primary': this.direction == 'rtl',
                    'btn-light': this.direction == 'ltr',
                };
            },
            ['@click']() {
                this.toggle('rtl');
            }
        },
        ltrButton: {
            [':class']() {
                return {
                    'btn-primary': this.direction == 'ltr',
                    'btn-light': this.direction == 'rtl',
                };
            },
            ['@click']() {
                this.toggle('ltr');
            }
        },
        textarea: {
            ['x-ref']: 'textarea',
            [':style']() {
                return {
                    'direction': this.direction,
                };
            },
        },
        saveDirection() {
            if (this.textareaId !== undefined) {
                const dirId = `${this.textareaId}_direction`;
                localStorage.setItem(dirId, this.direction);
            }
        },
        loadSavedDirection() {
            if (this.textareaId !== undefined) {
                const dirId = `${this.textareaId}_direction`;
                const savedDirection = localStorage.getItem(dirId);
                if (savedDirection !== undefined) {
                    this.direction = savedDirection;
                }
            }
        },
        toggle(dir) {
            this.direction = dir;
            this.saveDirection();
        },
        init() {
            this.$nextTick(() => {
                this.textareaEl = this.$refs.textarea;
                this.textareaId = this.textareaEl.id;
                this.loadSavedDirection();
            });

        },
    }));
});