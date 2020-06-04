// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class UploadMediaByURLResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("UploadJobs")]
        [Validation(Required=true)]
        public List<UploadMediaByURLResponseUploadJobs> UploadJobs { get; set; }
        public class UploadMediaByURLResponseUploadJobs : TeaModel {
            [NameInMap("JobId")]
            [Validation(Required=true)]
            public string JobId { get; set; }

            [NameInMap("SourceURL")]
            [Validation(Required=true)]
            public string SourceURL { get; set; }

        }

    }

}
