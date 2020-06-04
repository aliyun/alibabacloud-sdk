// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class RegisterMediaResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegisteredMediaList")]
        [Validation(Required=true)]
        public List<RegisterMediaResponseRegisteredMediaList> RegisteredMediaList { get; set; }
        public class RegisterMediaResponseRegisteredMediaList : TeaModel {
            [NameInMap("MediaId")]
            [Validation(Required=true)]
            public string MediaId { get; set; }

            [NameInMap("FileURL")]
            [Validation(Required=true)]
            public string FileURL { get; set; }

            [NameInMap("NewRegister")]
            [Validation(Required=true)]
            public bool? NewRegister { get; set; }

        }

        [NameInMap("FailedFileURLs")]
        [Validation(Required=true)]
        public List<string> FailedFileURLs { get; set; }

    }

}
