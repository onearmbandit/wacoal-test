<?php

namespace threewp_broadcast\premium_pack\classes;

/**
	@brief		File handling functions.
	@since		2019-09-24 19:15:41
**/
trait files_trait
{
	/**
		@brief		Copy source dir to target dir.
		@details	Thank you https://stackoverflow.com/questions/5707806/recursive-copy-of-directory
		@since		2019-07-04 21:46:26
	**/
	public static function copy_recursive( $source, $dest )
	{
		$directory_iterator = new \RecursiveDirectoryIterator( $source, \RecursiveDirectoryIterator::SKIP_DOTS );
		$iterator = new \RecursiveIteratorIterator( $directory_iterator, \RecursiveIteratorIterator::SELF_FIRST );
		mkdir( $dest, 0755, true );
		foreach ( $iterator as $item )
		{
			$filename = $iterator->getSubPathName();
			static::copy_recursive_this_directory( $filename );
			if ( $item->isDir() )
			{
				if ( static::copy_recursive_this_directory( $filename ) )
					mkdir( $dest . DIRECTORY_SEPARATOR . $filename );
			}
			else
			{
				if ( static::copy_recursive_this_file( $filename ) )
					copy( $item, $dest . DIRECTORY_SEPARATOR . $filename );
			}
		}
	}

	/**
		@brief		Allow subclasses to decide whether to copy this directory.
		@since		2021-01-16 20:14:33
	**/
	public static function copy_recursive_this_directory( $directory )
	{
		return true;
	}

	/**
		@brief		Allow subclasses to decide whether to copy this file.
		@since		2021-01-16 20:33:36
	**/
	public static function copy_recursive_this_file( $filename )
	{
		return true;
	}

	/**
		@brief		Delete a source directory recursively.
		@details	Thank you https://gist.github.com/mindplay-dk/a4aad91f5a4f1283a5e2
		@since		2020-03-13 19:26:49
	**/
	public static function delete_recursive( $directory )
	{
		$items = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator( $directory, \RecursiveDirectoryIterator::SKIP_DOTS ),
			\RecursiveIteratorIterator::CHILD_FIRST
		);
		foreach ( $items as $item )
		{
			if ( $item->isDir() )
				rmdir( $item->getRealPath() );
			else
				unlink( $item->getRealPath() );
		}
		rmdir( $directory );
	}
}
