// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetUploadDetailsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("UploadDetails")]
        [Validation(Required=true)]
        public List<GetUploadDetailsResponseUploadDetails> UploadDetails { get; set; }
        public class GetUploadDetailsResponseUploadDetails : TeaModel {
            [NameInMap("MediaId")]
            [Validation(Required=true)]
            public string MediaId { get; set; }

            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }

            [NameInMap("FileSize")]
            [Validation(Required=true)]
            public long FileSize { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("UploadStatus")]
            [Validation(Required=true)]
            public string UploadStatus { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("ModificationTime")]
            [Validation(Required=true)]
            public string ModificationTime { get; set; }

            [NameInMap("CompletionTime")]
            [Validation(Required=true)]
            public string CompletionTime { get; set; }

            [NameInMap("UploadSize")]
            [Validation(Required=true)]
            public long UploadSize { get; set; }

            [NameInMap("UploadRatio")]
            [Validation(Required=true)]
            public float? UploadRatio { get; set; }

            [NameInMap("UploadIP")]
            [Validation(Required=true)]
            public string UploadIP { get; set; }

            [NameInMap("UploadSource")]
            [Validation(Required=true)]
            public string UploadSource { get; set; }

            [NameInMap("DeviceModel")]
            [Validation(Required=true)]
            public string DeviceModel { get; set; }

        }

        [NameInMap("NonExistMediaIds")]
        [Validation(Required=true)]
        public List<string> NonExistMediaIds { get; set; }

        [NameInMap("ForbiddenMediaIds")]
        [Validation(Required=true)]
        public List<string> ForbiddenMediaIds { get; set; }

    }

}
