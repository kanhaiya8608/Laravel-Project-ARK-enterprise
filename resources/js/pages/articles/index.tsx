import { Head, Link, Form, router } from '@inertiajs/react';
import articles from '@/routes/articles';
import { Button } from '@/components/ui/button';
import { Pencil, Save, Search, Trash } from 'lucide-react';
import type { Article } from '@/types/article';
import { Input } from '@/components/ui/input';

import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table';

type PaginationLink = {
    url: string | null;
    label: string;
    active: boolean;
};

type Props = {
    collection: {
        data: Article[];
        meta: {
            current_page: number;
            last_page: number;
            total: number;
            links: PaginationLink[];
        };
    };
    search: string | null;
};

export default function ArticleIndex({ collection, search }: Props) {
    const onDelete = (item: Article) => {
    if (confirm(`Are you sure you want to delete the article?`)) {{
        router.delete(articles.destroy(item));
    }}
    };
    return (
        <>
            <Head title="Articles" />

            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className="flex justify-end">
                    <Button asChild>
                        <Link
                            href={articles.create()}
                            className="flex items-center gap-1"
                        >
                            <Save className="h-4 w-4" />
                            Add Article
                        </Link>
                    </Button>
                </div>

                <div className="mb-4">
                    <Form
                        method="get"
                        action="/articles"
                        className="flex gap-2"
                    >
                        <Input
                            name="search"
                            defaultValue={search ?? ''}
                            placeholder="Search article"
                            className="max-w-sm"
                        />

                        <Button type="submit" variant="secondary">
                            <Search className="mr-2 h-4 w-4" />
                            Search
                        </Button>
                    </Form>
                </div>

                <Table>
                    <TableHeader>
                        <TableRow>
                            <TableHead>Name</TableHead>
                            <TableHead>Description</TableHead>
                            <TableHead className="text-end">Actions</TableHead>
                        </TableRow>
                    </TableHeader>

                    <TableBody>
                        {collection.data.length > 0 ? (
                            collection.data.map((item) => (
                                <TableRow key={item.id}>
                                    <TableCell>{item.name}</TableCell>

                                    <TableCell>{item.description}</TableCell>

                                    <TableCell className="text-end">
                                        <Button
                                            variant="secondary"
                                            size="sm"
                                            className="mr-2"
                                        >
                                            <Link href={articles.edit(item.id)}>
                                                <Pencil />
                                            </Link>
                                        </Button>
                                        <Button
                                            size="sm"
                                            variant="destructive"
                                            title="Delete"
                                            onClick={() =>onDelete(item)}
                                        >
                                            <Trash />
                                        </Button>
                                    </TableCell>
                                </TableRow>
                            ))
                        ) : (
                            <TableRow>
                                <TableCell
                                    colSpan={3}
                                    className="text-center text-muted-foreground"
                                >
                                    No articles found.
                                </TableCell>
                            </TableRow>
                        )}
                    </TableBody>
                </Table>

                <div className="mt-1 flex items-center justify-between">
                    <p className="text-sm text-muted-foreground">
                        Showing page {collection.meta.current_page} of{' '}
                        {collection.meta.last_page} ({collection.meta.total}{' '}
                        total items)
                    </p>

                    {collection.meta.links?.length > 1 && (
                        <div className="flex gap-1">
                            {collection.meta.links.map((link, index) => (
                                <Button
                                    key={index}
                                    variant={link.active ? 'default' : 'ghost'}
                                    size="sm"
                                    disabled={!link.url}
                                    asChild
                                >
                                    <Link href={link.url ?? '#'}>
                                        <span
                                            dangerouslySetInnerHTML={{
                                                __html: link.label,
                                            }}
                                        />
                                    </Link>
                                </Button>
                            ))}
                        </div>
                    )}
                </div>
            </div>
        </>
    );
}

ArticleIndex.layout = {
    breadcrumbs: [
        {
            title: 'Articles',
            href: articles.index(),
        },
    ],
};
