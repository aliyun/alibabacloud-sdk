find_package(alibabacloud_rpcutil QUIET)

if(alibabacloud_rpcutil_FOUND)
  message(STATUS "Found alibabacloud_rpcutil version ${alibabacloud_rpcutil_VERSION}")
else()
  message(STATUS "alibabacloud_rpcutil could not be located, Building alibabacloud_rpcutil instead.")
  include(FetchContent)

  FetchContent_Declare(
    _alibabacloud_rpcutil
    GIT_REPOSITORY https://github.com/alibabacloud-sdk-cpp/rpcutil.git
    GIT_TAG master
    CMAKE_ARGS
      -DENABLE_UNIT_TESTS:BOOL="0")

  FetchContent_GetProperties(_alibabacloud_rpcutil)
  if(NOT _alibabacloud_rpcutil_POPULATED)
    FetchContent_Populate(_alibabacloud_rpcutil)
    message(STATUS "Added alibabacloud_rpcutil source : ${_alibabacloud_rpcutil_SOURCE_DIR}")
    message(STATUS "Added alibabacloud_rpcutil binary : ${_alibabacloud_rpcutil_BINARY_DIR}")
    add_subdirectory(
      ${_alibabacloud_rpcutil_SOURCE_DIR}
      ${_alibabacloud_rpcutil_BINARY_DIR}
    )
  endif()
  target_include_directories(alibabacloud_open_platform_20191219 PRIVATE "${_alibabacloud_rpcutil_SOURCE_DIR}/include")
endif()
