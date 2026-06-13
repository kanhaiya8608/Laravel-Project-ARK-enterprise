import { Head, usePage } from '@inertiajs/react';
import articles from '@/routes/articles';

import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Textarea } from '@/components/ui/textarea';
import { Form, Link } from '@inertiajs/react';
import type { Article } from '@/types/article';
import { InputOTPGroup } from '@/components/ui/input-otp';
import InputError from '@/components/input-error';
type Props = {
    article: Article;
};

export default function ArticleForm({ article }: Props) {
    const { url } = usePage();

    const action = article.id
        ? articles.update.form(article.id)
        : articles.store.form();
    return (
        <>
            <Head title="Articles" />
            <Form {...action}>
                {({ errors, processing }) => (
                    <>
                        <div className="absolute inset-0 flex flex-col items-center gap-4 rounded-xl p-4 md:p-6">
                            <div className="flex w-1/2 justify-between gap-4">
                                <h1 className="text-2xl font-semibold">
                                    {url !== '/articles/create'
                                        ? 'Edit Article'
                                        : 'Create Article'}
                                </h1>

                                <Button type="submit" disabled={processing}>
                                    {processing ? 'Saving...' : 'Save Article'}
                                </Button>
                            </div>

                            <div className="grid w-1/2 gap-4">
                                <div className="flex gap-4 pt-8">
                                    <Card className="w-full p-4">
                                        <div className="grid gap-6">
                                            <div className="grid w-full gap-2">
                                                <Label htmlFor="name">
                                                    Name
                                                </Label>

                                                <Input
                                                    id="name"
                                                    name="name"
                                                    defaultValue={article.name}
                                                    placeholder="Article Name"
                                                    aria-invalid={Boolean(
                                                        errors.name,
                                                    )}
                                                />

                                                <InputError
                                                    message={errors.name}
                                                />
                                            </div>

                                            <div className="grid w-full gap-2">
                                                <Label htmlFor="description">
                                                    Description
                                                </Label>

                                                <Textarea
                                                    id="description"
                                                    name="description"
                                                    defaultValue={
                                                        article.description
                                                    }
                                                    placeholder="Write your article..."
                                                    rows={8}
                                                />

                                                <InputError
                                                    message={errors.description}
                                                />
                                            </div>
                                        </div>
                                    </Card>
                                </div>
                            </div>

                            <div className="mt-8 flex w-1/2 justify-between">
                                <Button
                                    variant="secondary"
                                    type="button"
                                    asChild
                                >
                                    <Link href={articles.index()}>Cancel</Link>
                                </Button>

                                <Button type="submit" disabled={processing}>
                                    Save Article
                                </Button>
                            </div>
                        </div>
                    </>
                )}
            </Form>
        </>
    );
}

ArticleForm.layout = {
    breadcrumbs: [
        {
            title: 'Articles',
            href: articles.index(),
        },
    ],
};
