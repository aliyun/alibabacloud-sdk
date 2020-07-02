// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaTableIntroWikiResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetMetaTableIntroWikiResponseData Data { get; set; }
        public class GetMetaTableIntroWikiResponseData : TeaModel {
            [NameInMap("CreateTime")]
            [Validation(Required=true)]
            public long CreateTime { get; set; }
            [NameInMap("ModifiedTime")]
            [Validation(Required=true)]
            public long ModifiedTime { get; set; }
            [NameInMap("Creator")]
            [Validation(Required=true)]
            public string Creator { get; set; }
            [NameInMap("Version")]
            [Validation(Required=true)]
            public long Version { get; set; }
            [NameInMap("CreatorName")]
            [Validation(Required=true)]
            public string CreatorName { get; set; }
            [NameInMap("Content")]
            [Validation(Required=true)]
            public string Content { get; set; }
        };

    }

}
