// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetMezzanineInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Mezzanine")]
        [Validation(Required=true)]
        public GetMezzanineInfoResponseMezzanine Mezzanine { get; set; }
        public class GetMezzanineInfoResponseMezzanine : TeaModel {
            [NameInMap("VideoId")]
            [Validation(Required=true)]
            public string VideoId { get; set; }
            [NameInMap("Bitrate")]
            [Validation(Required=true)]
            public string Bitrate { get; set; }
            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }
            [NameInMap("Duration")]
            [Validation(Required=true)]
            public string Duration { get; set; }
            [NameInMap("Fps")]
            [Validation(Required=true)]
            public string Fps { get; set; }
            [NameInMap("Height")]
            [Validation(Required=true)]
            public long Height { get; set; }
            [NameInMap("Width")]
            [Validation(Required=true)]
            public long Width { get; set; }
            [NameInMap("Size")]
            [Validation(Required=true)]
            public long Size { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("FileURL")]
            [Validation(Required=true)]
            public string FileURL { get; set; }
            [NameInMap("FileName")]
            [Validation(Required=true)]
            public string FileName { get; set; }
            [NameInMap("CRC64")]
            [Validation(Required=true)]
            public string CRC64 { get; set; }
            [NameInMap("PreprocessStatus")]
            [Validation(Required=true)]
            public string PreprocessStatus { get; set; }
            [NameInMap("OutputType")]
            [Validation(Required=true)]
            public string OutputType { get; set; }
            [NameInMap("AudioStreamList")]
            [Validation(Required=true)]
            public List<GetMezzanineInfoResponseMezzanineAudioStreamList> AudioStreamList { get; set; }
            public class GetMezzanineInfoResponseMezzanineAudioStreamList : TeaModel {
                    public string Index { get; set; }
                    public string CodecName { get; set; }
                    public string CodecLongName { get; set; }
                    public string CodecTimeBase { get; set; }
                    public string CodecTagString { get; set; }
                    public string CodecTag { get; set; }
                    public string SampleFmt { get; set; }
                    public string SampleRate { get; set; }
                    public string Channels { get; set; }
                    public string ChannelLayout { get; set; }
                    public string Timebase { get; set; }
                    public string StartTime { get; set; }
                    public string Duration { get; set; }
                    public string Bitrate { get; set; }
                    public string NumFrames { get; set; }
                    public string Lang { get; set; }
            }
            [NameInMap("VideoStreamList")]
            [Validation(Required=true)]
            public List<GetMezzanineInfoResponseMezzanineVideoStreamList> VideoStreamList { get; set; }
            public class GetMezzanineInfoResponseMezzanineVideoStreamList : TeaModel {
                    public string Index { get; set; }
                    public string CodecName { get; set; }
                    public string CodecLongName { get; set; }
                    public string Profile { get; set; }
                    public string CodecTimeBase { get; set; }
                    public string CodecTagString { get; set; }
                    public string CodecTag { get; set; }
                    public string Width { get; set; }
                    public string Height { get; set; }
                    public string HasBFrames { get; set; }
                    public string Sar { get; set; }
                    public string Dar { get; set; }
                    public string PixFmt { get; set; }
                    public string Level { get; set; }
                    public string Fps { get; set; }
                    public string AvgFPS { get; set; }
                    public string Timebase { get; set; }
                    public string StartTime { get; set; }
                    public string Duration { get; set; }
                    public string NumFrames { get; set; }
                    public string Lang { get; set; }
                    public string Rotate { get; set; }
            }
        };

    }

}
