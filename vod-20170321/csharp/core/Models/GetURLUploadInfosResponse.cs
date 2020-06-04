// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetURLUploadInfosResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("URLUploadInfoList")]
        [Validation(Required=true)]
        public List<GetURLUploadInfosResponseURLUploadInfoList> URLUploadInfoList { get; set; }
        public class GetURLUploadInfosResponseURLUploadInfoList : TeaModel {
            [NameInMap("JobId")]
            [Validation(Required=true)]
            public string JobId { get; set; }

            [NameInMap("UploadURL")]
            [Validation(Required=true)]
            public string UploadURL { get; set; }

            [NameInMap("MediaId")]
            [Validation(Required=true)]
            public string MediaId { get; set; }

            [NameInMap("FileSize")]
            [Validation(Required=true)]
            public string FileSize { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("UserData")]
            [Validation(Required=true)]
            public string UserData { get; set; }

            [NameInMap("ErrorCode")]
            [Validation(Required=true)]
            public string ErrorCode { get; set; }

            [NameInMap("ErrorMessage")]
            [Validation(Required=true)]
            public string ErrorMessage { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("CompleteTime")]
            [Validation(Required=true)]
            public string CompleteTime { get; set; }

        }

        [NameInMap("NonExists")]
        [Validation(Required=true)]
        public List<string> NonExists { get; set; }

    }

}
