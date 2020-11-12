find_package(alibabacloud_credential QUIET)

if(alibabacloud_credential_FOUND)
  message(STATUS "Found alibabacloud_credential version ${alibabacloud_credential_VERSION}")
else()
  message(STATUS "alibabacloud_credential could not be located, Building alibabacloud_credential instead.")
  include(FetchContent)

  FetchContent_Declare(
    _alibabacloud_credential
    GIT_REPOSITORY https://github.com/aliyun/credentials-cpp.git
    GIT_TAG master
    CMAKE_ARGS
      -DENABLE_UNIT_TESTS:BOOL="0")

  FetchContent_GetProperties(_alibabacloud_credential)
  if(NOT _alibabacloud_credential_POPULATED)
    FetchContent_Populate(_alibabacloud_credential)
    message(STATUS "Added alibabacloud_credential source : ${_alibabacloud_credential_SOURCE_DIR}")
    message(STATUS "Added alibabacloud_credential binary : ${_alibabacloud_credential_BINARY_DIR}")
    add_subdirectory(
      ${_alibabacloud_credential_SOURCE_DIR}
      ${_alibabacloud_credential_BINARY_DIR}
    )
  endif()
  target_include_directories(alibabacloud_open_platform_20191219 PRIVATE "${_alibabacloud_credential_SOURCE_DIR}/include")
endif()
